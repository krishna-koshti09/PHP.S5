<?php
$num=array(array(10,20,30),
	array(40,50,60),
	array(70,80,90));

for ($i=0; $i < 3; $i++) { 
	for ($j=0; $j < 3; $j++) { 
		echo $num [$i] [$j];
	}
	echo"<br/>";
}
?>