<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Let's go in Pares</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: url('https://i.pinimg.com/1200x/71/c3/dd/71c3dd96ca9e8d6192b50a257f8e27d1.jpg') center/cover no-repeat;
            color: #222;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .login-container {
            background: #fff;
            max-width: 400px;
            margin: 5rem auto;
            padding: 5rem;
            border-radius: 12px;
        }

        .login-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .login-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .login-container input {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-bottom: 1.2rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f9f9f9;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container input:focus {
            border-color: #c00;
            box-shadow: 0 0 0 3px rgba(204, 0, 0, 0.2);
            outline: none;
        }

        .login-container .btn {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            background: linear-gradient(to right, #c00, #900);
            color: #000000ff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }


        .login-container .btn:hover {
            background: #000;
            transform: scale(1.02);
        }


        .login-container .btn:hover {
            background: #000;
        }

        .login-container .signup-link {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .login-container .signup-link a {
            color: #c00;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Let's go in Pares</h1>
        <p>Welcome back! Sign in to view our full menu.</p>
    </header>

    <div class="login-container">
        <h2>Login</h2>
        <form action="your_login_route.php" method="POST">
        <label for="username">Username or Email</label>
        <input type="text" id="username" name="username" placeholder="Enter your username or email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit" class="btn">Login</button>
        <div class="signup-link">
            <p>Don't have an account? <a href="signup">Sign up here</a></p>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Let's go in Pares</p>
    </footer>
</body>
</html>
