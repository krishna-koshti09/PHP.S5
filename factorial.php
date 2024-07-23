<?php

$num1=5;

class Facto{
	function factorial($num1){
		$sum=1;


		for ($i=$num1; $i >1; $i--) { 
			
			$sum*=$i;
		}

		return $sum;

	}


}
$obj= new Facto();
$res=$obj->factorial($num1);
echo "Factorial of $num1 is:".$res;
?>