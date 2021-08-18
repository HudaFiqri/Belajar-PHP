<?php

//package to import
include('config.php');
include('check.php');

//calling function from package
$call = new user_check;

//sql command to check user if existing or not
$sql_command_to_check = $call->check_user('user9', 'market_data');
$sql_query = mysqli_query($sql_connect, $sql_command_to_check);
$sql_row = mysqli_num_rows($sql_query);

//check if user existing
if($sql_row == 1){

    echo 'user found';

} elseif($sql_row == 0 or NULL) {

    echo 'user not found';

} elseif($sql_row >= 1){

    echo 'user found but user double';

} else {

    echo 'command error';

}

echo '</br>'.$sql_row;

?>