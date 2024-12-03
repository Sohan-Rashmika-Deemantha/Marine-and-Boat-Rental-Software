<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Boat Rental Software</title>
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
        .payment-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        .payment-form h2 {
            color: #0062E6;
            margin-bottom: 20px;
        }
        .payment-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .payment-form select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        .payment-form button {
            width: 100%;
            padding: 12px;
            background-color: #0062E6;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .payment-form button:hover {
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
        <p>Complete your payment to confirm your booking.</p>
    </header>

    <div class="container">
        <div class="payment-form">
            <h2>Payment Details</h2>
            <form action="process_payment.php" method="POST" onsubmit="return validatePaymentForm()">
                <input type="text" id="cardholder_name" name="cardholder_name" placeholder="Cardholder Name" required>
                <input type="text" id="card_number" name="card_number" placeholder="Card Number" required pattern="\d{16}">
                <input type="text" id="expiry_date" name="expiry_date" placeholder="Expiry Date (MM/YY)" required>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required pattern="\d{3}">
                <select id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript to validate the payment form
        function validatePaymentForm() {
            var cardholderName = document.getElementById("cardholder_name").value;
            var cardNumber = document.getElementById("card_number").value;
            var expiryDate = document.getElementById("expiry_date").value;
            var cvv = document.getElementById("cvv").value;

            if (cardholderName == "" || cardNumber == "" || expiryDate == "" || cvv == "") {
                alert("Please fill in all fields.");
                return false;
            }

            // Check if card number is 16 digits
            if (!/^\d{16}$/.test(cardNumber)) {
                alert("Please enter a valid 16-digit card number.");
                return false;
            }

            // Check if CVV is 3 digits
            if (!/^\d{3}$/.test(cvv)) {
                alert("Please enter a valid 3-digit CVV.");
                return false;
            }

            alert("Payment successful! Thank you for your booking.");
            return true;
        }
    </script>
</body>
</html>
