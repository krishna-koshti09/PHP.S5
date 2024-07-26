<?php

$arr = array('abg@gmail.com','xyz2gmail.com','test@gmail.com','test@gmail.com');


echo "Duplicate Email(s) is/are :";
foreach ($arr as $key => $value) {
	
	unset($arr[$key]);

	if (in_array($value, $arr)) {
		
		echo " ".$value. " ";
	}
}
?>