<?php

//writing to a content i php
$fptr = fopen("myfile1.txt", "a");
// echo "welcome o files ";

// 
// fwrite($fptr, "This is Another content\n");
// fwrite($fptr, "This is Another content222\n");

// 
//appending to a file in php

fwrite($fptr, "thist is the beinh appending to the file\n");
fclose($fptr);


 ?>