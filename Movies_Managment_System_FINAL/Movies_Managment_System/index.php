<?php
/*
  Main index / landing page containing the signup form structure.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies Management System - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="form-signin">
    <form action="register.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="emri" placeholder="Name" required>
            <label>Name</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <label>Username</label>
        </div>
        <div class="form-floating mb-2">
            <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            <label>Email address</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label>Password</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
            <label>Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
        <p class="mt-3 mb-3 text-muted">&copy; 2026</p>
    </form>
</div>

</body>
</html>