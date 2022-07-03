<?php 
echo "The Update is prossing <br>";
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "new";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM `phptrip` WHERE `dest`='Canada'";
	$result = mysqli_query($conn, $sql);

//usage of WHERE CLAUSE TO FETCH DATA FROM  DATABASE


$num =  mysqli_num_rows($result);
echo $num;
echo "  Records Found In The Database";
$no = 1;
echo "<br><br><br><br>";
if ($num>0) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo $no . " Hello ". $row['name'] . " Welcome to " . $row['dest'];
		echo "<br>";
		$no = $no +1;

	}


}

//UPADTING DATA IN DATABASE
$sql ="UPDATE `phptrip` SET `name` = 'kashmir' WHERE `dest`='canada'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of Affected Rows: $aff <br>";
if ($result) {
	echo "We Updated The Result Successfully<br>";

}
else{
	echo "We Can't Update The Result";
}
?>