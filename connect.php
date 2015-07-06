<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "talq";
/*
$servername = "localhost";
$username = "jpAdmin";
$password = "hockey69132";
$dbname = "talq";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$keything = $_POST['keyVar'];
$secretthing = $_POST['secretVar'];
$messagething = $_POST['messageVar'];
$queryString = "INSERT INTO message (uniqueKey, uniqueSecret, messageData)
VALUES ('" . $keything . "','" . $secretthing . "','" . $messagething . "')";

$sql = $queryString;

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<html>
    <head>
        <meta name="viewport" content="maximum-scale=1.0, minimum-scale=1.0, width=device-width, initial-scale=1" />
        <link type="text/css" href="style.css" rel="stylesheet"/>
        <script src="someScripts.js" type=text/javascript ></script>
        <script src="jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="logoDiv">
            <a href="index.html" class="noLine">
               <p class="logoP">.tal_Q.</p>
            </a>
        </div>
        <div class="keySecretInfo">
            <p class="welcome" name="keyVar">KEY: <?php echo $keything?></p>
            <p class="welcome" name="secretVar">SECRET: <?php echo $secretthing ?></p>
            <p class="welcome">Wanna Share?</p>
            
            <a href="http://www.jackcpace.com/view.html?key=<?php echo $keything?>&secret=<?php echo $secretthing ?>">http://www.jackcpace.com/view.html?key=<?php echo $keything?>&secret=<?php echo $secretthing ?></a>
            </br>
            </br>
        </div>
    </body>
</html>