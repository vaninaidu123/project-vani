<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register - Smart Campus</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

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

/* register card */

.form-box{
width:420px;
background:white;
padding:35px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.form-box h2{
text-align:center;
margin-bottom:25px;
}

.form-box input,
.form-box select{
width:100%;
padding:10px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
font-size:14px;
}

/* password container */

.password-box{
position:relative;
}

.password-box input{
width:100%;
padding:10px;
padding-right:40px;
}

.eye{
position:absolute;
right:12px;
top:50%;
transform:translateY(-50%);
cursor:pointer;
font-size:18px;
}

/* button */

.form-box button{
width:100%;
padding:10px;
background:#0d3b66;
border:none;
color:white;
border-radius:5px;
cursor:pointer;
font-size:15px;
}

.form-box button:hover{
background:#0a2c4c;
}

.form-box p{
text-align:center;
margin-top:15px;
}

.form-box a{
color:#0d3b66;
text-decoration:none;
}

</style>

</head>

<body>

<div class="form-box">

<h2>Create Account</h2>

<form action="backend/register_process.php" method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email Address" required>

<!-- Password with eye -->

<div class="password-box">

<input type="password" name="password" id="password" placeholder="Password" required>

<span class="eye" onclick="togglePassword()">👁</span>

</div>

<!-- Branch Dropdown -->

<select name="branch" required>
<option value="">Select Branch</option>
<option value="PUC">PUC</option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="MECH">MECH</option>
<option value="CIVIL">CIVIL</option>
<option value="MME">MME</option>
<option value="CHEMICAL">CHEMICAL</option>
</select>

<input type="text" name="year" placeholder="Year (PUC1 / PUC2 / 1st / 2nd / 3rd / 4th)" required>

<button type="submit">Register</button>

</form>

<p>Already have an account? <a href="login.php">Login</a></p>

</div>

<script>

function togglePassword(){

var password=document.getElementById("password");

if(password.type==="password"){
password.type="text";
}else{
password.type="password";
}

}

</script>

</body>
</html>