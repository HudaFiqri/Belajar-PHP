<html>
    <body>
        <form action="" method="POST">

        <input type="text" name="value" placeholder="value">

        <button type="submit">Get Value</button>

        </form>

        <br>
        
        <?php
        
        //calling function on html to php
        $value_POST = $_POST['value'];

        //for connect to MySQL Server
        $username = 'cperoot';
        $password = 'nasional123';
        $server = 'localhost';
        $database = 'market';

        /*
        For SQL Command

        use market;

        SELECT * FROM market_data where username='user2';
        */

        //sql connect module
        $sql_connect = mysqli_connect($server, $username, $password, $database);
        $sql_command = "SELECT * FROM market_data where username='$value_POST'";
        $sql_command_1 = "SELECT * FROM market_data";
        $sql_query = mysqli_query($sql_connect, $sql_command);
        $sql_rows = mysqli_num_rows($sql_query);

        
        //search user in database if user existing
        if( $sql_rows == 1 ){

            echo '</br>username terdaftar di dalam server';

        } elseif ( $sql_rows != 1 ){

            echo '</br>username tidak terdaftar di dalam server atau masukkan username yang akan di cari terlebih dahulu';

        } else {
            echo 'asdks';
        }

        ?>

    </body>
</html>