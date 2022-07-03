<?php 
echo "this is a Multi-Dimensional Arrays <br>";
$multiDim = array(
 					array(2,5,7,8),
 					array(1,2,3,1),
 					array(4,5,0,1)
 				  )
;
// echo var_dump($multiDim);
// echo $multiDim[1][2];

//printing the contents of a 2 dimensional array
// for ($i=0 ;$i < count($multiDim); $i++) { 
// echo var_dump($multiDim[$i]);
// echo "<br>";

// }
for ($i=0 ;$i < count($multiDim); $i++) { 
for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
	echo $multiDim[$i][$j];
	echo "  ";

}
echo "<br>";

}

/*
3 DIMENSIONAL ARRAYS

$multiDim = array(
    array(
        array(5,8,7,9),
        array( 2,9,3,8 ),
        array( 1,8,5,9 ),
        array( 6,4,3,7 )
    ),

    array(
        array(5,8,7,9),
        array( 2,9,3,8 ),
        array( 1,8,5,9 ),
        array( 6,4,3,7 )
    ),
    array(
    	array(1,2,5,9),
    	array(1,2,5,9),
    	array(1,2,5,9),
    	array(1,2,5,9),

    ),
   array(
  		array(9,8,7,5),
  		array(9,8,7,5),
  		array(9,8,7,5),
  		array(9,8,7,5)
  	)

   );



// echo var_dump($multiDim);
// echo $multiDim[1][2];

//printing the contents of a 2 dimensional array
// for ($i=0 ;$i < count($multiDim); $i++) { 
// echo var_dump($multiDim[$i]);
// echo "<br>";

// }
for ($i=0 ;$i < count($multiDim); $i++) { 
for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
for ($l=0; $l < count($multiDim[$i][$j]); $l++) { 
	echo ($multiDim[$i][$j][$l]);
}
	echo "  ";

}
echo "<br>";

}

*/




?>