<?php

echo "<br>";
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "new";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("sorry we failed to connect");

}
else{
	echo "connection was successfull";
}
?>