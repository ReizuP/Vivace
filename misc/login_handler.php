<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "database.php"; 

// Get the AJAX form data
$input = $_POST['username'] ?? ''; // the form field name
$password = $_POST['password'] ?? '';

// Sanitize
$input = mysqli_real_escape_string($conn, $input);
$password = mysqli_real_escape_string($conn, $password);

// Find user by username OR email
$query = "SELECT * FROM users WHERE email = '$input' OR user = '$input' LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Check password (hashed or not)
    if (password_verify($password, $user['pass'])) {
        // ✅ SET SESSION VARIABLES
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['user'];
        $_SESSION['email'] = $user['email'];

        echo json_encode(["success" => true, "message" => "Login successful"]);
    } else {
        echo json_encode(["success" => false, "message" => "Incorrect password"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "No account found with that username or email"]);
}
?>
