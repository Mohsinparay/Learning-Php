<?php 
$name = "mohsin";
$income = "200";


/*
php data types
1.string
2.integer
3.float
4.Boolean
5.Object
6.Array
7.Null

*/


//STRING - SEQUENCE OF CHARACTERS

$name = "mohsin's";
$friend = "paray";
echo "The name of $name Friend is $friend";
//double ("") and single ('') are equal

//Integer - non Decimal number

$income = "999";
$debits =  -750;
echo "<br>";
echo " $income";
echo " $debits";

//float - Decimal Point Number


$income = "500.9";
$debits =  -89.9;
echo "<br>";
echo " $income";
echo " $debits";
echo "<br>";


//Booleans - can be true or False


$x =true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";echo "<br>";


//Objects - Instances of clases



// Employee is a class ----> Mohsin can be object

//Arrays - used to store Muliple Values in a single Variable

$frnd = array("Mohsin", "Mairaj", "Paray") ;

echo var_dump($frnd);

echo "<br>";
echo $frnd[0];
echo "<br>";
echo $frnd[1];
echo "<br>";
echo $frnd[2];echo "<br>";
echo $frnd[2];echo "<br>";
echo $frnd[2];echo "<br>";
echo $frnd[2];echo "<br>";
echo $frnd[2];echo "<br>";

//starts from 0------



//Null -
$nul = NULL;
echo $nul;

echo var_dump($nul)

?>