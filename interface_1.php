<?php

interface orange{
	public function print();
}

class color implements orange{

	public function print(){
	echo "Orange Color.";
  }
}

class fruit implements orange{
	public function print(){
	echo "Orange Fruit.";
  }
}

$obj= new color();
$obj->print();

$obj2= new color();
$obj2->print();
?>