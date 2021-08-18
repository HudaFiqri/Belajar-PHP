<?php

$username = "cperoot";
$password = "nasional123";
$server = "localhost";
$database = "market";

$sql_conn = mysqli_connect($server, $username, $password, $database);
$sql_comm = "SELECT * FROM client";
$sql_execute = mysqli_query($sql_conn, $sql_comm);

$sql_rows = mysqli_fetch_array($sql_execute, MYSQLI_ASSOC);

echo "name: ". $sql_rows["user_name"];

?>