<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boats - Boat Rental Software</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #0062E6, #33AEFF);
            color: #333;
        }
        header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            text-align: center;
            color: white;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .boat-card {
            background: white;
            border-radius: 10px;
            width: 300px;
            margin: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .boat-card img {
            width: 100%;
            border-radius: 8px;
        }
        .boat-card h3 {
            color: #0062E6;
            margin: 15px 0;
        }
        .boat-card p {
            font-size: 1.1em;
            margin: 10px 0;
        }
        .boat-card .price {
            color: #ff7e5f;
            font-size: 1.3em;
            font-weight: bold;
        }
        .boat-card button {
            padding: 12px 20px;
            background-color: #0062E6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }
        .boat-card button:hover {
            background-color: #33AEFF;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Marine & Boat Rental Software</h1>
        <p>Choose from a variety of boats for your adventure.</p>
    </header>

    <div class="container">
        <!-- Boat 1 -->
        <div class="boat-card">
            <img src="{{URL ('image/1.png')}}" alt="Boat 1">
            <h3>Rigid PVC Canoe</h3>
            <p>Single & Double Boats</p>
            <p class="price">Rs. 3000</p>
            <a href="{{ route('booking') }}">
                <button>Book Now</button>
            </a>    
        </div>

        <!-- Boat 2 -->
        <div class="boat-card">
            <img src="{{URL ('image/2.png')}}" alt="Boat 2">
            <h3>Family Boat</h3>
            <p>Perfect for family trips</p>
            <p class="price">Rs. 5000</p>
            <a href="{{ route('booking') }}">
                <button>Book Now</button>
            </a>
        </div>

        <!-- Boat 3 -->
        <div class="boat-card">
            <img src="{{URL ('image/3.png')}}" alt="Boat 3">
            <h3>River Stream</h3>
            <p>Explore the peaceful river</p>
            <p class="price">Rs. 7000</p>
            <a href="{{ route('booking') }}">
                <button>Book Now</button>
            </a>
        </div>

        <!-- Boat 4 -->
        <div class="boat-card">
            <img src="{{URL ('image/4.png')}}" alt="Boat 4">
            <h3>Center Console</h3>
            <p>Comfort and performance</p>
            <p class="price">Rs. 8000</p>
            <button onclick="bookBoat('Center Console')">Book Now</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to handle boat booking
        function bookBoat(boatName) {
            alert('Booking the ' + boatName);
            // Redirect to booking page or handle the logic here
            window.location.href = '/booking.php'; // Replace with actual booking page
        }
    </script>
</body>
</html>
