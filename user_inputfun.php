<?php
class student {
	public $name;

	function set_name($name){
		$this->$name=$name;
	}
	function get_name(){
		return $this->$name;
	}
}

$student1 = new student();
$stu_name=$_POST['stu_name'];
$student1->set_name($stu_name);

if (isset($_POST['submit'])) {
	if (!empty($stu_name)) {
		echo "<h2>Student Details:</h2>";
		echo "<p>Name:</p>".$student1->get_name()."</p>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form_Dynamic</title>
</head>
<body>
<form method="POST">
	Name <input type="text" name="stu_name">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>