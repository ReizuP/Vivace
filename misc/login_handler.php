<?php
session_start();
include __DIR__ . "/database.php";
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$login = trim($_POST['username'] ?? ''); // accepts username or email
$password = $_POST['password'] ?? '';

if ($login === '' || $password === '') {
    echo json_encode(['success' => false, 'message' => 'Fill in all fields']);
    exit;
}

// try to find user by username or email
$stmt = $conn->prepare("SELECT id, `user`, pass FROM users WHERE `user` = ? OR email = ? LIMIT 1");
$stmt->bind_param("ss", $login, $login);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_assoc()) {
    if (password_verify($password, $row['pass'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['user'];
        echo json_encode(['success' => true, 'message' => 'Login successful']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Incorrect password']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Account not found']);
}
?>
