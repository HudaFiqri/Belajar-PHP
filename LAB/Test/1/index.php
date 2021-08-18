<?php

$server = "localhost";
$database = "market";
$username = "cperoot";
$password = "nasional123";

$sql_conn = mysqli_connect($server, $username, $password, $database);

/*
$sql_comm = "CREATE TABLE data_table (
    id int(2),
    user varchar(255),
    pass varchar(255)
)";
$sql_query = mysqli_query($sql_conn, $sql_comm);
*/

for($data=0; $data<=10; $data++){
    $sql_comm = "CREATE TABLE table_$data (
        user_id int(5),
        user_name varchar(255),
        user_pass varchar(255)
    )";

    $sql_query = mysqli_query($sql_conn, $sql_comm);

    echo "Creating Table On Database With Name $sql_comm";
}

?>