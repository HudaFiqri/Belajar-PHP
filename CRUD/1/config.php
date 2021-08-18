<?php

$username = "cperoot";
$password = "nasional123";
$server = "localhost";
$database = "market";

$sql_connect = mysqli_connect($server, $username, $password, $database);

$config_value = "config file is connect";

echo $config_value;

?>