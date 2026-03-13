<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Smart Campus Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background:#f4f6f9;
}

/* HERO */

.hero{
height:90vh;
background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("college.jpg");
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
}

/* CARDS */

.card{
transition:0.3s;
border:none;
border-radius:10px;
}

.card:hover{
transform:translateY(-8px);
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

footer{
background:#0d3b66;
color:white;
padding:15px;
text-align:center;
margin-top:50px;
}
.navbar-brand img{
border-radius:6px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
<img src="college_logo.png" alt="College Logo" width="40" height="40" class="me-2">
Smart Campus
</a>



<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#categories">Departments</a>
</li>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="register.php">Register</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- HERO -->

<section class="hero">

<div class="container">

<h1 class="display-4 fw-bold">Smart Campus Management System</h1>

<p class="lead mt-3">Manage campus complaints efficiently and transparently</p>

<a href="login.php" class="btn btn-primary btn-lg mt-3">File a Complaint</a>

</div>

</section>

<!-- DEPARTMENTS -->

<section class="container mt-5" id="categories">

<h2 class="text-center mb-4">Campus Complaint Departments</h2>

<div class="row g-4">

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🏠 Hostel</h5>
<p>Hostel maintenance and facility complaints.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>📚 Library</h5>
<p>Library infrastructure and resource issues.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🏫 Academic Block</h5>
<p>Classroom infrastructure problems.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🎓 Academic Complaints</h5>
<p>Subject or faculty related complaints.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🍽 Mess</h5>
<p>Food quality and mess facility issues.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🏥 Hospital</h5>
<p>Medical center or health service complaints.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🎭 Auditorium</h5>
<p>Auditorium equipment or facility issues.</p>
<button class="btn btn-primary btn-sm">View</button>
</div>
</div>

<div class="col-md-3">
<div class="card p-3 shadow-sm text-center">
<h5>🧑‍🎓 Personal Problems</h5>
<p>Confidential student personal complaints.</p>
<button class="btn btn-danger btn-sm">Private</button>
</div>
</div>

</div>

</section>

<!-- FOOTER -->

<footer>

<p>© 2026 My College | Smart Campus Management System</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>