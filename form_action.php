<?php


$aDoor=$_POST['formDoor'];
if (empty($aDoor)) {
	echo "You Didn't select any formDoor";
}
else{
	$n= count($aDoor);

	echo "You select $n door(s):";

	for ($i=0; $i < $n; $i++) { 
		echo "$aDoor[$i]". " ";
	}
}
?>