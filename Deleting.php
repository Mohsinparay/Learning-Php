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
$sql = "DELETE FROM `phptrip` WHERE `dest`= 'russia'LIMIT 3";
	$result = mysqli_query($conn, $sql);

if ($result) {
	echo "The Data Has Been Deleted Successfully<br>";
	}
	else{
		$err = mysqli_error($conn);
      echo "Sorry Try Again After Some Time due to this error --> $err";
	}
$aff = mysqli_affected_rows($conn);
echo "Number Of Affected Rows -->$aff";
echo "<br>";

if ($aff == 0) {
	echo "Already Deleted";
}
if ($aff >> 0) {
	echo "Deleted Successfully";
}
 ?>
