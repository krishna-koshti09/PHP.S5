<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Interest</title>
</head>
<body>
<form method="POST">
	Principal&nbsp;<input type="number" name="pr"><br>
	Rate&nbsp;<input type="number" name="rate"><br>
	Time&nbsp;<input type="number" name="time"><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset(['submit'])) {
class Interest
{
	public $pr;
	public $rate;
	public $time;
	
	function set_val($pr,$rate,$time)
	{
		$this->$pr=$pr;
		$this->$rate=$rate;
		$this->$time=$time;
	}

	function get_cal_val(){
		$int=($this->pr*$this->rate*$this->time)/100;

		echo "Interest:",$int;
	}

	$pr=$_POST['pr'];
	$rate=$_POST['rate'];
	$time=$_POST['time'];
	$obj= new Interest();
	$obj->set_val($pr,$rate,$time);
	$obj->get_cal_val();
}
}
?>
</body>
</html>