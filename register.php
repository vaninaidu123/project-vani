<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Smart Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="left">
        <!-- College Image Background -->
    </div>

    <div class="right">
   <form action="backend/register_process.php" method="POST" class="form">
            <h2>Create Account</h2>

            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>

            <input type="text" name="branch" placeholder="Branch" required>
            <input type="text" name="year" placeholder="Year" required>

            <button type="submit">Register</button>

            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

</div>

</body>
</html>