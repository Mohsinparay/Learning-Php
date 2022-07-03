<?php 
$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
/*
reading a file line by line
while ($a = fgets($fptr)) {
	echo $a;

	}
echo " End of files has reached";
*/
// reading a file by character by character
// echo fgetc($fptr);
// while ($a = fgetc($fptr)) {
// 	echo $a;
// 	// break;

// 	}
// echo " End of characters has reached";
// write a program which reads the content of title until has been encountered
while($a = fgetc($fptr)) {
	echo $a ;
	if $a == ""{
		break;
	}
}
?>