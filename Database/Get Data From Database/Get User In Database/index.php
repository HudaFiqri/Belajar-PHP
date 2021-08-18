<?php

#SELECT * FROM `client` WHERE user_name='user1'

$server = 'localhost';
$database = 'market';
$table = 'market';
$username = 'cperoot';
$password = 'nasional123';

$sql_connect = mysqli_connect($server, $username, $password, $database);
$sql_command = 'SELECT * FROM market_data';
$sql_query = mysqli_query($sql_connect, $sql_command);

while($sql_array = mysqli_fetch_array($sql_query)){
    echo 'id: '. $sql_array['id'].'<br>';
    echo 'user: '.$sql_array['username'].'<br>';
    echo 'password: '.$sql_array['password'].'<br><br>';
}

$sql_array2 = mysqli_fetch_array($sql_query);


?>