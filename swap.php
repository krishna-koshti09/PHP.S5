<?php

$num1=20;
$num2=30;

class Swap_t{
	function swapping($num1,$num2){

		$temp=$num1;
		$num1=$num2;
		$n2=$temp;

		echo "Number 1 After Swapping:".$num1."<br>";
		echo "Number 2 After Swapping:".$num2;

	}


}
$obj= new Swap_t();
echo "Number 1 Before Swapping:".$num1."<br>";
		echo "Number 2 Before Swapping:".$num2."<br>";
$obj->swapping($num1,$num2);
?>