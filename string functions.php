<?php

$name = "mohsin is a good boy";

echo $name;

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";


echo "The length"." of my string is " . strlen($name); //this function counts the length of a string

echo "<br><br>";


echo str_word_count($name); // this function counts how many words there are in a santance


echo "<br><br>";

echo strrev($name); //this function reverses the santance

echo "<br><br>";

echo strpos($name, "mohsin");// number in string eg (0,1,2,3 ---)
echo "<br><br>";

echo str_replace("mohsin", "Good", $name);// this function replaces any word in a string

echo "<br><br>";
 
 echo str_repeat($name,100 );
  echo "<br>";



  
echo "<pre>";
echo rtrim("    this is a good boy     ");//this function is used to trim th right sided space
echo "<br>";
echo ltrim("    this is a good boy     ");//this function is used to trim the left sided space
echo "</pre>";


  ?>