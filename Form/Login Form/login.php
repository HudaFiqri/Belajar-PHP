<?php

$username = 'cperoot';
$password = 'nasional123';
$server = 'localhost';
$database = 'market';

$user_name = $_POST['username'];
$user_password = $_POST['password'];

$sql_connect = mysqli_connect($server, $username, $password, $database);
$sql_command = "SELECT * FROM market_data WHERE username='$user_name' and password='$user_password'";
$sql_query = mysqli_query($sql_connect,$sql_command);
$sql_check = mysqli_num_rows($sql_query);

if($sql_check == 1){
    echo "you are logged on system";
} elseif($sql_check == 0) {
    echo "you are cannot login on system, please check your username and password";
}

?>

<br>
<br>
<a href="index.html">Go Back</a>