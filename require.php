<?php 

// include 'database_connect.php';
require 'database_connect.php';

$sql = "SELECT * FROM `phptrip`";
	$result = mysqli_query($conn, $sql);



	//finding the number of records returned

$num =  mysqli_num_rows($result);
echo $num;
echo "  Records Found In The Database";
echo "<br><br><br><br>";

while ($row = mysqli_fetch_assoc($result)) {
		// echo var_dump($row);
		echo $row['sno'] . " Hello! " . $row ['name']  . " welcome To ".  $row['dest'];
		echo "<br><br><br><br>";
	}
?>