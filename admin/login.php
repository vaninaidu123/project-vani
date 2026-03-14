<?php
session_start();
include "../backend/config.php";

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=md5($_POST['password']);

$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

$_SESSION['admin']=$username;

header("Location: dashboard.php");

}else{

echo "Invalid Login";

}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card mt-5 p-4">

<h4 class="text-center">Admin Login</h4>

<form method="POST">

<input type="text" name="username" class="form-control mb-3" placeholder="Username">

<input type="password" name="password" class="form-control mb-3" placeholder="Password">

<button name="login" class="btn btn-primary w-100">Login</button>

</form>

</div>

</div>

</div>

</div>

</body>

</html>