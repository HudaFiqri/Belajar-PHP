<?php

function value($value){
    echo "$value data<br>";
}

function value_looping(){
    for($value=0; $value<=10; $value++){
        echo "output looping = $value<br>";
    }
}

value_looping();

?>