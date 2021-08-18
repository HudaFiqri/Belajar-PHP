<?

include("config.php");

?>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body id="body-sign">
        <h1 id="h1-sign">add user</h1>
        <form action="sign.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="passwrod" name="password" placeholder="password">
            <button type="submit">Submit Query</button>
        </form>
        <a href="../1">Go Back</a>
    </body>
</html>