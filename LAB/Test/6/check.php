<?php

class user_check{
    
    function check_user($username, $table){
        /*
        SQL Command Reference

        use market;

        SELECT * FROM market_data WHERE username='user1';
        */

        //SQL command to check if user existing on database
        $sql_user_check_command = "SELECT * FROM $table WHERE username='$username'";

        return $sql_user_check_command;
    }

}

?>