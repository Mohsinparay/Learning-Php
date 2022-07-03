<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$name ="R";
$destination = "R is a programming language for statistical computing and graphics supported by the R Core Team and the R Foundation for Statistical Computing. Created by statisticians Ross Ihaka and Robert Gentleman, R is used among data miners and statisticians for data analysis and developing statistical software.";

// Sql query to be executed
$sql = "INSERT INTO `categories` (`categoryname`, `categorydescription`) VALUES ('$name', '$destination')";
echo "<br";
$result = mysqli_query($conn, $sql);


// Check for the database creation success
if($result){
    echo "The record was inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
echo "R";

 ?>