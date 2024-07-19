<?php
$name=$_REQUEST['name'];
$pwd=$_REQUEST['pwd'];
$gender=$_REQUEST['gender'];
$continent=$_REQUEST['continent'];
$meals=$_REQUEST['meals'];

if (isset($_REQUEST['Submit'])) {
    if (!empty($name)) {
        echo "Name:" . $name . "<br>";
    }
    if (!empty($pwd)) {
        echo "Password: " . $pwd . "<br>";
    }
    if (!empty($gender)) {
        echo "Gender: " . $gender . "<br>";
    }
    if (!empty($continent)) {
        echo "Continent: " . $continent . "<br>";
    }
    if (!empty($meals)) {

    	echo "You selected meal(s):";
    	
    	$var=count($meals);

    	for ($i=0; $i <$var; $i++) { 
    		echo "$meals[$i]"." ";
    	}
    }
    if (empty($meals)){

    	echo "You selected no meals.";
    }
}
?>