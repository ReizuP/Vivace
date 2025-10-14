<?php
include "database.php";

if (isset($_POST['prod_name']) && isset($_POST['quantity'])) {
    $prod_name = $_POST['prod_name'];
    $quantity = (int) $_POST['quantity'];

    // Prevent negative or zero quantities
    if ($quantity < 1) $quantity = 1;

    $query = "UPDATE cart SET quantity = ? WHERE prod_name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "is", $quantity, $prod_name);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => mysqli_error($conn)]);
    }

    mysqli_stmt_close($stmt);
}
?>
