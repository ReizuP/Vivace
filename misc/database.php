<?php
    $db_server = "localhost";
    $db_user = "root";
    
    $db_pass = 'root'; //reizu
    $db_name = 'vivace_db'; //reizu
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "Database is offline! (MariaDB) <br>";
        echo "Current user: $db_user";
}
?>
