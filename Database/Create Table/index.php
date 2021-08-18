<?php

$username = "cperoot";
$password = "nasional123";
$server = "localhost";
$database = "data1";

$connect = mysqli_connect($server, $username, $password, $database);
$sql_comm = "CREATE TABLE user_data_1(
    user_id int(5),
    user_name varchar(255),
    user_password varchar(255)
)";

$data_query = mysqli_query($connect, $sql_comm);

?>