<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
            font-family: 'Raleway', Lora;
        }
        .signup-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .signup-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #B76E79; /* Rose Gold color */
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
            border-color: #B76E79; /* Rose Gold border for input fields */
            width: 100%;
            padding: 10px;
        }
        .btn-primary {
            background-color: #B76E79; /* Rose Gold button */
            border-color: #B76E79; /* Rose Gold button border */
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background-color: #a25a61; /* Slightly darker Rose Gold on hover */
            border-color: #a25a61;
        }
        .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #B76E79; /* Rose Gold color for the login link */
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
        }
        .error-message {
            color: #f00;
        }
        .success-message {
            color: #0f0;
        }
    </style>
</head>
<body>
    <div class="signup-wrapper">
        <div class="signup-container">
            <h3>Sign Up</h3>
            
            <?php if (isset($_GET['error'])) { ?>
                <div class="message error-message">
                    <b><?=htmlspecialchars($_GET['error'])?></b>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="message success-message">
                    <b><?=htmlspecialchars($_GET['success'])?></b>
                </div>
            <?php } ?>
            
            <form action="app/signup.php" method="POST">
                <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Sign Up</button>
                
                <a href="login.php" class="login-link">Already have an account? Login</a>
            </form>
        </div>
    </div>
</body>
</html>