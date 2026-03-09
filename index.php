<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Campus Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">My College</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#categories">Categories</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Smart Campus Management System</h1>
            <p>Efficiently Manage Campus Complaints With Transparency</p>
            <button class="btn">File a Complaint</button>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories" id="categories">
        <h2>Complaint Categories</h2>

        <div class="card-container">

            <div class="card">
                <h3>Hostel Complaints</h3>
                <p>Report hostel maintenance & facility issues.</p>
                <button class="card-btn">View</button>
            </div>

            <div class="card">
                <h3>Academic Block & Library</h3>
                <p>Infrastructure & library related problems.</p>
                <button class="card-btn">View</button>
            </div>

            <div class="card">
                <h3>Academic Complaints</h3>
                <p>Subject, faculty or academic issues.</p>
                <button class="card-btn">View</button>
            </div>

            <div class="card">
                <h3>Personal Problems</h3>
                <p>Confidential student personal issues.</p>
                <button class="card-btn">View</button>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 My College | Smart Campus Management System</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>