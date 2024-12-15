<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #f7f7f7; /* Cream background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Raleway', sans-serif;
        }
        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white; /* Light cream color */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(183, 110, 121, 0.2); /* Rose gold shadow */
            width: 100%;
            max-width: 400px;
            border: 2px solid #B76E79; /* Rose gold border */
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #B76E79; /* Rose gold color */
            font-family: 'Playfair', serif;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .form-control {
            border-color: #B76E79; /* Rose gold border for input fields */
            width: 100%;
            padding: 10px;
        }
        .btn-primary {
            background-color: #B76E79; /* Rose gold button */
            border-color: #B76E79;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #a25a61; /* Slightly darker rose gold on hover */
            border-color: #a25a61;
        }
        .signup-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #B76E79;
            text-decoration: none;
        }
        .signup-link:hover {
            text-decoration: underline;
        }
        .error-message {
            color: #f00;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <h3>Login</h3>
            
            <?php if (isset($_GET['error'])) { ?>
                <div class="error-message">
                    <b><?=htmlspecialchars($_GET['error'])?></b>
                </div>
            <?php } ?>
            
            <form action="app/login.php" method="POST">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
                
                <a href="signup.php" class="signup-link">Create an Account</a>
            </form>
        </div>
    </div>
</body>
</html>