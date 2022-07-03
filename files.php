<?php $fptr = fopen("myfile.txt", "r");
// echo var_dump($fptr);
if (!$fptr) {
die("unable to open the fie place check the file name");
}
$content = fread($fptr, filesize("myfile.txt"));
echo $content;

fclose($fptr)


?>