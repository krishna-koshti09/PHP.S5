<?php


$aBank=$_POST['bank'];
if (empty($aBank)) {
	echo "You Didn't select any bank";
}
else{

	echo "You selected bank(s):". $aBank;
	
}
?>