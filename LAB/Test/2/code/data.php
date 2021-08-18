<?php

$user_name = $_POST['username'];
$user_pass = $_POST['password'];
$user_email = $_POST['email'];
$server = "localhost";
$database = "market";

/*
echo "

username is: $user_name <br>
password is: $user_pass <br>
email is: $user_email

";
*/

$sql_connect = mysqli_connect($server, 'cperoot', 'nasional123', $database);
$sql_command = "INSERT INTO client ( id, user_name, user_pass, user_email) VALUES (DEFAULT, '$user_name', '$user_pass', '$user_email')";
mysqli_query($sql_connect, $sql_command);

echo "

Creating Username With: $user_name<br>
Creating Password With: $user_pass<br>
Creating Email With: $user_email<br>
$sql_command<br>

";

echo "<button>back</button>";

?>