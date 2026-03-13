<?php
session_start();
include "config.php";

$user_id = $_SESSION['user_id'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$stmt = $conn->prepare("INSERT INTO complaints (user_id, category, title, description) VALUES (?, ?, ?, ?)");

$stmt->bind_param("isss", $user_id, $category, $title, $description);

if($stmt->execute()){

echo "Complaint submitted successfully!";

}else{

echo "Error submitting complaint.";

}
?>