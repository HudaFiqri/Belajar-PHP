<?php

$user_name = $_POST['username'];
$user_password = $_POST['password'];

$server = 'localhost';
$database = 'market';
$username = 'cperoot';
$password = 'nasional123';

$sql_connect = mysqli_connect($server, $username, $password, $database);
$sql_command = "SELECT FROM client (id, user_name, user_password) WHERE username=$user_name";

echo $sql_command;

?>