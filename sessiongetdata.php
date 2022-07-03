<?php
//start sessions and get the data

session_start();
if (isset($_SESSION['username'])) {

echo " welcome ". $_SESSION['username'];
echo "<br> Your Favorite Categery is ". $_SESSION['favCat'];
echo "<br>";	

}
else{
echo "Please Login To continue";
 }


 ?>
