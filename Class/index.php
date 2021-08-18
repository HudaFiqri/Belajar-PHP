<?php

class value1{
   
    //value of class

    //function on class
    function func1(){
        echo 'value of function 1';
    }

    function func2(){
        echo 'value of function 2';
    }

}

//calling class with name value1
$class_calling = new value1;

//calling class with function on class with name of function is func1
echo $class_calling->func1(). '<br>';
echo $class_calling->func2();

?>