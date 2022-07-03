<?php 

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
       $sum += $value;

    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;

    foreach ($marksArr as $value) {
       $sum += $value;
       $i++;

    }
    return $sum/$i;
}


$rohanDas = [34,+ 12 , 56 , 98 , 93 , 77];
// $sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$harry = [99,99,99,99,88,77];
// $sumMarksHarry = processMarks($harry);
$sumMarksHarry = avgMarks($harry);


echo "Total marks scored by Harry out of 600 is $sumMarksHarry <br>";
echo "Total marks scored by Rohan out of 600 is $sumMarks";


 ?>