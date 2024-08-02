<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication Table</title>
</head>
<body>
<form action="mul_new.php" method="POST">
	Enter Number<input type="Number" name="num">
	<input type="submit" name="submit" value="submit">
</form>
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
</body>
</html>
