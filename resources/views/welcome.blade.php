<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Rental Software</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
        }
        header {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-size: 1.2em;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffd700;
        }
        .hero {
            text-align: center;
            padding: 100px 20px;
        }
        .hero h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .hero button {
            background-color: #ffd700;
            border: none;
            color: black;
            padding: 15px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }
        .hero button:hover {
            background-color: #ffcc00;
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Marine & Boat Rental Software</h1>
        <p>Making boat rentals seamless and efficient.</p>
    </header>
    <nav>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="hero">
        <h2>Experience the Best Boating Adventures in Sri Lanka</h2>
        <p>Book your boat now and explore the serene waters.</p>
        <button onclick="bookNow()">Book Now</button>
    </div>
    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>
    <script>
        function bookNow() {
            alert('Redirecting to Booking Page...');
            window.location.href = '/boats.php'; // Change this to your actual booking page
        }
    </script>
</body>
</html>
