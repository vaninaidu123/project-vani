<?php

session_start();
include "config.php";

$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($result)>0){

$user=mysqli_fetch_assoc($result);

if($password==$user['password']){

$_SESSION['user_id']=$user['id'];
$_SESSION['user_name']=$user['name'];

header("Location: ../dashboard.php");

}else{

header("Location: ../login.php?error=wrongpassword");

}

}else{

header("Location: ../login.php?error=nouser");

}

?>