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
$theKey = $_POST['keyVar'];
$theSecret = $_POST['secretVar'];

$sql = "SELECT messageData FROM message WHERE uniqueKey = '$theKey'  AND uniqueSecret =  '$theSecret'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $secretMessage = $row['messageData'];
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<html>
    <head>
        <meta name="viewport" content="maximum-scale=1.0, minimum-scale=1.0, width=device-width, initial-scale=1" />
    </head>
    <link type="text/css" href="style.css" rel="stylesheet"/>
    <p class="theResults">Your Message: <?php echo $secretMessage; ?></p>
    <a href="index.html" class="takeMehHome">Take meh home!</a>
</html>
