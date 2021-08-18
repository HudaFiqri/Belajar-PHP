<?php

$user1 = [
    'id' => '1',
    'username' => 'user1',
    'password' => 'user1',
    'email' => 'moe@moe.com'
];

echo "id = ". $user1['id'].'<br>';
echo 'username = '. $user1['username'].'<br>';
echo 'email = '. $user1['password'].'<br>';
echo '<br>'. var_dump($user1);

?>