<?php
$error="";

if(isset($_GET['error'])){
if($_GET['error']=="wrongpassword"){
$error="Incorrect Password";
}
if($_GET['error']=="nouser"){
$error="User not found";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Smart Campus</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:#f4f6fb;
}

.form-box{
width:380px;
background:white;
padding:35px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.form-box h2{
text-align:center;
margin-bottom:20px;
}

.error{
color:red;
text-align:center;
margin-bottom:15px;
}

.form-box input{
width:100%;
padding:10px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

.password-box{
position:relative;
}

.password-box i{
position:absolute;
right:10px;
top:50%;
transform:translateY(-50%);
cursor:pointer;
font-size:18px;
color:#666;
}

.form-box button{
width:100%;
padding:10px;
background:#0d3b66;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
}

.form-box button:hover{
background:#0a2c4c;
}

.form-box p{
text-align:center;
margin-top:15px;
}

</style>

</head>

<body>

<div class="form-box">

<h2>Student Login</h2>

<?php if($error!=""){ ?>
<p class="error"><?php echo $error; ?></p>
<?php } ?>

<form action="backend/login_process.php" method="POST">

<input type="email" name="email" placeholder="Email Address" required>

<div class="password-box">
<input type="password" name="password" id="password" placeholder="Password" required>
<i class="bi bi-eye" onclick="togglePassword()"></i>
</div>

<button type="submit">Login</button>

</form>

<p>Don't have an account? <a href="register.php">Register</a></p>

</div>

<script>

function togglePassword(){

var pass=document.getElementById("password");

if(pass.type==="password"){
pass.type="text";
}else{
pass.type="password";
}

}

</script>

</body>
</html>