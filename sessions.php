<?php 
// what is a session?
// Used information across difference pages
//verify user login info
session_start();
$_SESSION['username'] = "mohsin";
$_SESSION['favCat'] = "Bo000oks";


echo "We have Saved Your Sessions";



?>