<?php
$servername = "localhost";
$username = "root";    //input your username here
$password = "root";    //input your password here
$dbname = "vivace_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "Database is offline! (MariaDB) <br>";
        echo "Current user: $db_user";
}
?>
