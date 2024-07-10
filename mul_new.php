<?php
if ($_REQUEST['submit']) {
	$num=$_REQUEST['num'];

	for ($i=1; $i <=10; $i++) {
	$res=$num*$i; 
		echo "$num X $i = $res";
		echo "<br>";
	}
}
?>