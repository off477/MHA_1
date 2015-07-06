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
$messageThing = $_POST['messageVar'];

$queryString = "INSERT INTO message (uniqueKey, uniqueSecret, messageData)
VALUES ('" . $keything . "','" . $secretThing . "' ,'" . $messageThing . "')";


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
    </head>
    <link type="text/css" href="style.css" rel="stylesheet"/>
    <script src="someScripts.js" type=text/javascript ></script>
        <script src="jquery-1.11.3.min.js" type="text/javascript"></script>
    <a href="index.html" class="takeMehHome">Take meh home breh!</a>
</html>