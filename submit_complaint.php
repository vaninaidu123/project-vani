<?php
session_start();
include "backend/config.php";

if(!isset($_SESSION['user_id'])){
header("Location: login.php");
exit();
}

$category = $_GET['category'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>

<title>Submit Complaint</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 shadow">

<h3 class="mb-4">Submit Complaint</h3>

<form action="backend/submit_complaint_process.php" method="POST">

<input type="hidden" name="category" value="<?php echo $category; ?>">

<div class="mb-3">
<label class="form-label">Category</label>
<input type="text" class="form-control" value="<?php echo ucfirst($category); ?>" readonly>
</div>

<div class="mb-3">
<label class="form-label">Complaint Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control" rows="4" required></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit Complaint</button>

</form>

</div>

</div>

</body>
</html>