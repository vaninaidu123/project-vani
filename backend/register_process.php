<?php
session_start();
include "config.php";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$branch = trim($_POST['branch']);
$year = trim($_POST['year']);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if email already exists
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "Email already registered!";
    exit();
}

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (name, email, password, branch, year) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $hashed_password, $branch, $year);

if ($stmt->execute()) {
    header("Location: ../login.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>