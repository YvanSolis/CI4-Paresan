<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Let's go in Pares</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background: url('https://i.pinimg.com/1200x/71/c3/dd/71c3dd96ca9e8d6192b50a257f8e27d1.jpg') center/cover no-repeat;
            color: #222;
            line-height: 1.6;
            font-family: 'Inter', sans-serif;
        }

        header {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            background: #000000ff;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        footer {
            background: #000000ff;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        .first-section {
            margin-top: 1.5rem;
        }

        section {
        padding: 2rem 1rem;
        max-width: 800px;
        margin: auto;
        border-left: 4px solid rgba(0, 0, 0, 1);
        background: #fff;
        margin-bottom: 2rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        border-radius: 12px;
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        margin-bottom: 0.5rem;
        }   

        section p {
            margin: 0;
            padding-left: 0.5rem;
            border-left: 2px solid #eee;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
        }

        .highlight {
            color: rgba(255, 0, 0, 1);
            font-weight: bold;
            background: #ffecec;
            padding: 0 4px;
            border-radius: 3px;
        }
        
        .auth-buttons {
            text-align: center;
            margin: 1.5rem 0;
        }

        .btn {
            display: inline-block;
            margin: 0 0.5rem;
            padding: 0.6rem 1.2rem;
            background: rgba(189, 188, 188, 1);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #000000ff;
        }

    </style>
</head>
<body>
    <header>
        <h1>Let's go in Pares</h1>
    </header>

    <div class="auth-buttons">
        <a href="login" class="btn">View Menu</a>
    </div>  


    <section class="first-section">
    <h2>About Pares</h2>
    <p>Welcome to <span class="highlight">Let’s go in Pares</span>—where comfort food meets culture. Our signature dish, <span class="highlight">Pares</span>, is a rich, slow-braised beef stew served with garlic rice and hot soup. It’s not just a meal—it’s a warm, flavorful escape. Whether you're craving something hearty or just want to treat yourself, we’ve got the perfect plate waiting for you.</p>
    </section>

    <section>
    <h2>History</h2>
    <p><span class="highlight">Let’s go in Pares</span> started with a simple idea: bring the soul of Filipino street food into a cozy, welcoming space. Inspired by the legendary paresan stalls of Quezon City, we’ve reimagined the classic trio—beef, rice, and soup—with our own twist. Since opening, we’ve become a go-to spot for late-night cravings, barkada hangouts, and comfort food lovers from all walks of life.</p>
    </section>

    <section>
    <h2>Where to Try</h2>
    <p>Ready to experience the hype? Visit <span class="highlight">Let’s go in Pares</span>—your new favorite paresan spot. Whether you're from Mandaluyong or just passing through Metro Manila, our doors are open and the beef is always tender. Drop by, dine in, or take out. One bite and you’ll know why we say: <em>“Let’s go in Pares, not Paris.”</em></p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Paresan in the Philippines</p>
    </footer>
</body>
</html>