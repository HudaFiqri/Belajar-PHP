<?php

include('config.php');

$user_name = $_GET['username'];
$user_password = $_GET['password'];

$sql_command = "INSERT INTO $table (id, username, password) VALUES (DEFAULT, '$user_name', '$user_password')";
$sql_query = mysqli_query($sql_connect, $sql_command);


?>