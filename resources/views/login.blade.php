<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Boat Rental Software</title>
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
        .login-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .login-form h2 {
            color: #0062E6;
            margin-bottom: 20px;
        }
        .login-form select, 
        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #0062E6;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-form button:hover {
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
        <p>Login to manage your bookings and rentals.</p>
    </header>

    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="{{ route('boats') }}" method="GET" onsubmit="return validateForm()">
            @csrf    
            <!-- Dropdown to Select Role -->
                <select id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="customer">Customer</option>
                    <option value="employee">Employee</option>
                </select>
                <!-- Email and Password Fields -->
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to validate form
        function validateForm() {
            var role = document.getElementById("role").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (role === "") {
                alert("Please select a role (Customer or Employee).");
                return false;
            }

            if (email === "" || password === "") {
                alert("Please fill in all fields.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

