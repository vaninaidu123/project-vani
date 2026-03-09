<?php
$conn = new mysqli("localhost", "root", "asdea@123", "smart_campus");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>