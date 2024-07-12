<?php
class student {
	public $name;
	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}
}

$student1=new student();
$student2=new student();

$student1->set_name('ABC');
$student2->set_name('UAY');

echo "Student 1:<br>";
echo "Name:".$student1->get_name()."<br>";

echo "Student 2:<br>";
echo "Name:".$student2->get_name()."<br>";
?>