<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup - Boat Rental Software</title>
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
            align-items: center;
            height: 80vh;
        }
        .signup-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .signup-form h2 {
            color: #0062E6;
            margin-bottom: 20px;
        }
        .signup-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .signup-form button {
            width: 100%;
            padding: 12px;
            background-color: #0062E6;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .signup-form button:hover {
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
        <p>Join us today to book your adventure!</p>
    </header>

    <div class="container">
        <div class="signup-form">
            <h2>Customer Signup</h2>
            <form action="{{ route('login') }}" method="GET" onsubmit="return validateForm()">
                <input type="text" id="name" name="name" placeholder="Full Name" required>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to validate form
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
