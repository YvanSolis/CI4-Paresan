<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Let's go in Pares</title>
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
            width: 100%;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .signup-container {
            background: #fff;
            max-width: 400px;
            width: 100%;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .signup-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .signup-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .signup-container input {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #fdfdfd;
            font-family: 'Inter', sans-serif;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .signup-container input::placeholder {
            color: #888;
            font-style: italic;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
        }

        .signup-container input:focus {
            border-color: #c00;
            box-shadow: 0 0 0 3px rgba(204, 0, 0, 0.2);
            outline: none;
        }

        .signup-container .btn {
            display: block;
            width: 100%;
            padding: 0.75rem 1rem;
            background: linear-gradient(to right, #c00, #900);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .signup-container .btn:hover {
            background: #000;
            transform: scale(1.03);
        }

        .signup-container .login-link {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .signup-container .login-link a {
            color: #c00;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 1rem;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Let's go in Pares</h1>
        <p>Create your account and start ordering your favorites!</p>
    </header>

    <main>
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form action="your_signup_route.php" method="POST">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Juan Dela Cruz" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>

                <button type="submit" class="btn">Create Account</button>
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="login">Login here</a></p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Let's go in Pares</p>
    </footer>
</body>
</html>
