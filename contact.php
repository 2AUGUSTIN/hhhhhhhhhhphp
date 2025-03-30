<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        .Text {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            font-size: 14px;
            box-sizing: border-box;
        }

        .inp {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 15px;
        }

        .inp:hover {
            background-color: #0056b3;
        }

        .form-footer {
            text-align: center;
            margin-top: 10px;
        }

        .form-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="homepage.html" method="POST">
            <label for="text">Your Message</label>
            <textarea class="Text" id="text" name="text" rows="6" placeholder="Type your message here..." required></textarea>
            <input class="inp" type="submit" value="Submit">
        </form>
        <div class="form-footer">
            <p>We will get back to you shortly. <br><a href="hom.php.html">Back to Homepage</a></p>
        </div>
    </div>
</body>

</html>
