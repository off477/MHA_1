function generateKey(){
    var NEW_KEY = keyGenEngine();
    document.getElementById('keyEntry').value = NEW_KEY;
    var NEW_SECRET = keyGenEngine();
    document.getElementById('secretEntry').value = NEW_SECRET;
}
function clearKey(){
    document.getElementById('keyEntry').value = '';
}
function clearSecret(){
    document.getElementById('secretEntry').value = '';
}
function enterWithKey(){
    var KEY = '';
    KEY = document.getElementById('keyEntry').value;
    if (KEY.length <= 0)
    {
        alert('need key');
    }
    else{
       login(KEY);
    }
}
function login(theKey){
    var userKEY = theKey;
    alert(userKEY);   
}
function keyGenEngine(){
    //key generation engine
    var USER_KEY ='';
    var alphabet = 'abcdefghijklmnopqrstuvwxyz';
    var rs = Math.random().toString();
    for (var k = 0; k < 6;k++){
        for(var i = 0; i < rs.length; i++) {
            if (i == 3 || i == 6 || i == 7 || i == 10 || i == 14 || i == 18){
                if(k == 0  || k == 3 || k == 5){
                    USER_KEY += alphabet[rs[i]];
                    rs = Math.random().toString();
                    break;
                }
                else{
                    USER_KEY += rs[i];
                    rs = Math.random().toString();
                    break;
                }
            }
            else{
            }
        }

    }
    return USER_KEY;
}

function checkIfKeyExists(theKey){
    //check if key exists in the database
}
function newSecret(){
    var newSecretKey = keyGenEngine();
    document.getElementById('keyEntry').value = newSecretKey;
}
function redirectThis(){
    var x = window.location.host;
    setTimeout(x, '5000');
}
function letsGetThoseParams(){
    try{
    var query_string = {};
    var query = window.location.search.substring(1);
    var paramerters = query.split('&');
    var keyTemp = paramerters[0].split('=');
    var key = keyTemp[1];
    var secretTemp = paramerters[1].split('=');
    var secret = secretTemp[1];
    document.getElementById('keyEntry').value = key;
    document.getElementById('secretEntry').value = secret;
    }
    catch(e){
        }
}