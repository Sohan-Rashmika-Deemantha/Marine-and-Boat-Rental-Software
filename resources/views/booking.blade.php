<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Boat Rental Software</title>
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
            margin-top: 30px;
        }
        .booking-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .booking-form h2 {
            color: #0062E6;
            margin-bottom: 20px;
        }
        .booking-form input, .booking-form select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .booking-form button {
            width: 100%;
            padding: 12px;
            background-color: #0062E6;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .booking-form button:hover {
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
        <p>Book your adventure now!</p>
    </header>

    <div class="container">
        <div class="booking-form">
            <h2>Booking Form</h2>
            <form action="{{ route('payment') }}" method="GET">
                <input type="text" id="customer_name" name="customer_name" placeholder="Full Name" required>
                <input type="email" id="customer_email" name="customer_email" placeholder="Email Address" required>
                <input type="text" id="boat_name" name="boat_name" placeholder="Boat Name" required>
                <input type="date" id="booking_date" name="booking_date" required>
                <select id="booking_time" name="booking_time" required>
                    <option value="morning">Morning (8:00 AM - 12:00 PM)</option>
                    <option value="afternoon">Afternoon (12:00 PM - 4:00 PM)</option>
                    <option value="evening">Evening (4:00 PM - 7:00 PM)</option>
                </select>
                <button type="submit">Confirm Booking</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to validate the booking form
        function validateBookingForm() {
            var customerName = document.getElementById("customer_name").value;
            var customerEmail = document.getElementById("customer_email").value;
            var bookingDate = document.getElementById("booking_date").value;
            var bookingTime = document.getElementById("booking_time").value;
            
            if (customerName == "" || customerEmail == "" || bookingDate == "" || bookingTime == "") {
                alert("Please fill in all the fields.");
                return false;
            }
            alert("Booking confirmed for " + customerName + "!");
            return true;
        }
    </script>
</body>
</html>
