<?php
if (isset($_REQUEST['submit'])) {
	$name=$_REQUEST['name'];
	$color=$_REQUEST['color'];
	$gender=$_REQUEST['gender'];
	$branch=$_REQUEST['branch'];

	echo "Name: $name";
	echo "<br>";
	echo "Color: $color";
	echo "<br>";
	echo "Gender: $gender";
	echo "<br>";
	echo "Branch: $branch";
}
?>