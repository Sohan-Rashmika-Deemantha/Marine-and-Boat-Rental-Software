<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Rental Software</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #fff;
            background: url('image/cover.png') no-repeat center center fixed;
            background-size: cover;
            background-blend-mode: overlay;  /* This will blend the background image with a color */
            background-color: rgba(0, 0, 0, 0.4);  /* Add a black overlay with reduced opacity (0.4 for example) */
            overflow-x: hidden;
        }
        header {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.8em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        header p {
            font-size: 1.2em;
            margin: 5px 0 0;
        }
        nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            gap: 15px;
        }
        nav a {
            text-decoration: none;
            color:  #fff;
            font-size: 1.2em;
            font-weight: bold;
            border-bottom: 3px solid transparent; /* Increased line thickness */
            transition: all 0.3s ease;
        }
        nav a:hover {
            border-bottom: 3px solid #ffd700; /* Color and thickness of the hover line */
            color: #ffd700; /* Change color of the text on hover */
        }
        .hero {
            text-align: center;
            padding: 120px 20px;
            backdrop-filter: brightness(0.8);
        }
        .hero h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        .hero p {
            font-size: 1.2em;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .hero button {
            background-color: #ffd700;
            border: none;
            color: black;
            padding: 15px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #e6b800;
        }
        .top-right-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex; /* This makes the buttons align horizontally */
            gap: 15px; /* Adds space between the buttons */
        }
        .top-right-buttons a {
            text-decoration: none;
            margin: 0;
        }

        .top-right-buttons button {
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #0062E6;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }

        .top-right-buttons button:hover {
            background-color: #33AEFF;
            color: #ffffff;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1000;
        }
        .dropdown-content a {
            color: #0062E6;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
            font-size: 1em;
        }
        .dropdown-content a:hover {
            background-color: #33AEFF;
            color: #ffffff;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #fff;
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Marine & Boat Rental</h1>
        <p>Adventure Awaits on the Water</p>
    </header>
    <div class="top-right-buttons">
        <a href="{{ route('login') }}">
            <button>Login</button>
        </a>
        <div class="dropdown">
            <button>Sign Up</button>
            <div class="dropdown-content">
                <a href="{{ route('signup', ['type' => 'customer']) }}">Customer</a>
                <a href="{{ route('signup', ['type' => 'employee']) }}">Employee</a>
            </div>
        </div>
    </div>
    <nav>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="hero">
        <h2>Discover the Best Boating Adventures</h2>
        <p>Explore our wide selection of boats for rent and experience the serene waters of Sri Lanka. Book your boat now and make unforgettable memories.</p>
        <a href="{{ route('boats') }}">
            <button>Book Now</button>
        </a>
    </div>
    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>
</body>
</html>
