<?php
		  
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "new";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

	
	$sql = "SELECT * FROM `phptrip`";
	$result = mysqli_query($conn, $sql);



	//finding the number of records returned

$num =  mysqli_num_rows($result);
echo $num;
echo "  Records Found In The Database";
echo "<br><br><br><br>";

	// dislay the returned by sql querry

if ($num>0) {
// 		$row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";
// $row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";
// $row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";
// $row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";
// $row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";
// $row = mysqli_fetch_assoc($result);
// 		echo var_dump($row);
// 		echo "<br><br><br><br>";

//we can fetch data  in a better way  by while loops

	while ($row = mysqli_fetch_assoc($result)) {
		// echo var_dump($row);
		echo $row['sno'] . " Hello! " . $row ['name']  . " welcome To ".  $row['dest'];
		echo "<br><br><br><br>";
	}

}	
?>