<?php

$username = "cperoot";
$password = "nasional123";
$server = "localhost";

$connect = mysqli_connect($server, $username, $password);
$sql_comm = "CREATE DATABASE data2";

mysqli_query($connect, $sql_comm);

?>