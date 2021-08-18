<?php

$username = "cperoot";
$password = "nasional123";
$server = "localhost";
$database = "market";

$user_name = "market_user_3";
$user_pass = "market_user_3";
$user_id = "4";

$sql_conn = mysqli_connect($server, $username, $password, $database);
$sql_comm = "INSERT INTO Client (user_id, user_name, user_password) VALUES ($user_id , 'market_user_4', 'user4')";
$sql_execute = mysqli_query($sql_conn, $sql_comm);

?>