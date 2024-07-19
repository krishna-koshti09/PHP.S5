<?php


$aColor=$_POST['color'];
if (empty($aColor)) {
	echo "You Didn't select any color";
}
else{

	echo "You selected color(s):". $aColor;
	
}
?>