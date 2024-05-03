<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <link rel="stylesheet" href="../layouts/css/css/bootstrap.min.css">
        <script src="../layouts/css/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../layouts/css/style.css">
    <style>
        body {
            background-color: white;
            padding-top: 40px;
        }
        .login-form {
            width: 340px;
            margin: 0 auto;
            padding: 30px;
            background-color: orange;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .login-form h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2 class="text-center">Login</h2>
        <form action="login_proses.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>                     