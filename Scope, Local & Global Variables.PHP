<?php
echo "Scope, Local & Global Variables in php <br><br><br><br><br><br><br>";

$a = 99;
$b =10101;
 //Global variable Global variables refer to any variable that is defined outside of the function
function printValue(){
	// $a = 90; // Local variable The variables that are declared within a function are called local variables for that function.
	global $a,$b;// give me the acess to the global variable
	$a = 100; //can change the value og global variables
	$b = 1000;

	echo " <br> The value of variable is $a and  $b ";
}

printValue();
echo " <br> The value of variable is $a and  $b ";
echo "<br>";
echo var_dump($GLOBALS); //prints all the globals variables;


 ?>