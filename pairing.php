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
$secretThing = $_POST['secretVar'];
$queryString = "INSERT INTO secrets (uniqueKey, uniqueSecret)
VALUES ('" . $keything . "','" . $secretThing . "')";
echo $keything;

echo "Connected successfully";
$sql = $queryString;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
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
        <div class="welcomeDiv">
            <p class="welcome" name="keyVar">KEY: <?php echo $keything?></p>
            <p class="welcome" name="secretVar">SECRET: <?php echo $secretThing ?></p>
        </div>
        <form action="sendMessage.php" method="post">
            <input type="hidden" name="keyVar" value="<?php echo $keything?>" />
            <input type="hidden"  name="secretVar" value="<?php echo $secretThing ?>"/>
            <div class="messageTextAreaDiv">
            <textarea id="messageTextArea" class ="messageTextArea" name="messageVar"></textarea>
                </div>
            <button type="submit" id="generateButton" class="generateButton">Send Message</button>
        </form>

    </body>
</html>