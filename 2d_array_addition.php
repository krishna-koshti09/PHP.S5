<?php

$array1=array(array(10,30,20),
	array(40,50,60),
	array(70,80,90));

$array2=array(array(10,20,30),
	array(40,50,60),
	array(70,80,90));

for ($i=0; $i < 3; $i++) { 
	for ($j=0; $j < 3; $j++) { 
		
		echo "Addition is:" . $array1[$i][$j]+$array2[$i][$j] . "<br/>";
	}
}
?>