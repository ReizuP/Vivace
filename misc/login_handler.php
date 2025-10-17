<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "database.php"; // adjust path if needed

// Get the AJAX form data
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Sanitize
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Find user by email
$query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Check password (assuming it's hashed)
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
    echo json_encode(["success" => false, "message" => "No account found with that email"]);
}
?>
