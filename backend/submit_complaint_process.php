<?php

session_start();
include "config.php";

$user_id = $_SESSION['user_id'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$image_name = "";

/* image upload */

if(isset($_FILES['image']) && $_FILES['image']['name']!=""){

$target_dir = "../uploads/";

if(!is_dir($target_dir)){
mkdir($target_dir);
}

$image_name = time()."_".$_FILES['image']['name'];

$target_file = $target_dir.$image_name;

move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

}

$stmt = $conn->prepare("INSERT INTO complaints (user_id,category,title,description,image) VALUES (?,?,?,?,?)");

$stmt->bind_param("issss",$user_id,$category,$title,$description,$image_name);

if($stmt->execute()){

header("Location: ../dashboard.php");

}else{

echo "Error submitting complaint";

}

?>