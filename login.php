<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Smart Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="left"></div>

    <div class="right">
        <form action="backend/login_process.php" method="POST" class="form">
            <h2>Login</h2>

            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>

</div>

</body>
</html>