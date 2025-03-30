<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
          
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .buy-form {
           
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px;
            margin-top: 7rem;
        }

        h2 {
            text-align: center;
            color: #678;
            margin-bottom: 20px;
            
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="buy-form" bg-color="white">
        <h2>Buy Now</h2>
        <form action="thanky.html" method="post">
            <label for="product">Select Product</label>
            <select id="product" name="product" required>
                <option value="">Choose a product</option>
                <option value="product1">Product 1 - $49.99</option>
                <option value="product2">Product 2 - $79.99</option>
                <option value="product3">Product 3 - $99.99</option>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" required>

        
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>


            <label for="address">Shipping car</label>
            <textarea id="address" name="address" rows="4" placeholder="Enter your shipping address" required></textarea>

            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your email address" required>

            
            <label for="payment-method">Payment Method</label>
            <select id="payment-method" name="payment-method" required>
                <option value="">Select payment method</option>
                <option value="credit-card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Bank Transfer</option>
            </select>

            <input class="submit-btn" type="submit" value=" Purchase">
        </form>

        <div class="footer">
            <p>If you have any questions, please <a href="coc.php">contact us</a>.</p>
        
        </div>
    </div>
</body>

</html>
