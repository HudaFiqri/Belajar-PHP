<?php

include('php/php_class_1.php');
include('php/php_class_2.php');

$call_class_1 = new class_of_value1;
$call_class_2 = new class_of_value2;

//class 1 area
echo $call_class_1->func1(). '<br>';
echo $call_class_1->func2(). '<br>';

//class 2 area
echo $call_class_2->func1(). '<br>';
echo $call_class_2->func2();

?>