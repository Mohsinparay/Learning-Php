<?php 

//operators in php

// An operator is a symbol that performs operations on operands. In PHP (Hypertext Preprocessor), there are different types of operators depending on the number of operands they take. For example, urinary operators take only one operand. On the contrary, binary operators take two operands.
// addtion is a operation in php (2+2={4}----->operator)


/*
TYPES OF OPERATORS IN PHP
1.ARITHMETIC OPERATORS
2.ASSIGNMENT OPERATORS
3.COMPARISON OPERATORS
4.LOGICAL OPERATORS
*/
$a = 45;
$b = 30;

 
 //ARITHMETIC OPERAYORS

echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";



// 2.ASSIGNMENT OPERATORS

// echo "for x, the value is ". $x ."<br>";
// $a += 6;

// echo "for a, the value is ". $a ."<br>";

// $a -= 6;

// echo "for a, the value is ". $a ."<br>";


// $a /= 6;

// echo "for a, the value is ". $a ."<br>";




// $a *= 6 ;
// echo "For a, the value is ". $a . "<br>";

$a %= 5; // $a = $a % 5
echo "For a, the value is ". $a . "<br>";




//3.COMPARISON OPERATORS
   $x = 7;
   $z = 10;
   echo "For x > z, the result is ";
   echo var_dump( ($x > $z) ). "<br>";




   echo "For x < z, the result is";
   echo var_dump( ($x < $z) ). "<br>";



   echo "For x <> z, the result is";


   echo var_dump( $x <> $z ). "<br>";



//4.LOGICAL OPERATORS
// A logical operator is a symbol or word used to connect two or more expressions such that the value of the compound expression produced depends only on that of the original expressions and on the meaning of the operator. Common logical operators include AND, OR, and NOT.
// if else statements

$m = false;
$n = true;



echo var_dump($m and $n);

  echo "For m or n, the result is" ." <br>";

echo var_dump($m or $n);

  echo "For m and n, the result is" ." <br>";


echo var_dump($m && $n);

  echo "For m && n, the result is" ." <br>";



echo var_dump($m || $n);

  echo "For m || n, the result is" ." <br>";


  echo "For !m, the result is " ;
echo var_dump(!$m). "<br>";



  echo "For !n, the result is " ;
echo var_dump(!$n). "<br>";








?>