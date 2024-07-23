<?php
$array=array(10,50,20,70);
$array2=array(10,50,20,70);


rsort($array);
print_r($array);

print_r(array_merge($array,$array2));
?>