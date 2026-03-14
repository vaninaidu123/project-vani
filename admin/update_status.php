<?php

include "../backend/config.php";

$id=$_GET['id'];
$status=$_GET['status'];

mysqli_query($conn,"UPDATE complaints SET status='$status' WHERE id='$id'");

header("Location: dashboard.php");

?>