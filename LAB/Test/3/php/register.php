<?php

$user_name = $_POST['username'];
$user_password = $_POST['password'];
$user_email = $_POST['email'];

$server = 'localhost';
$database = 'market';
$username = 'cperoot';
$password = 'nasional123';

$sql_connect = mysqli_connect($server, $username, $password, $database);
$sql_command = "INSERT INTO client (id, user_name, user_pass, user_email) VALUES (DEFAULT, '$user_name', '$user_password', '$user_email')";
$sql_query = mysqli_query($sql_connect, $sql_command);

echo "
username: $user_name<br>
password: $user_pass<br>
email: $user_email<br>
<br>
created
";
?>