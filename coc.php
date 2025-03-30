<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: #333;
                
        }

        

        .contact-form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px;
        }

        h2 {
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #0056b3;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            background-color: #007bff;
            color: #ffffff;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        
        @media (max-width: 768px) {
            .contact-form-container {
                padding: 30px;
            }

            h2 {
                font-size: 24px;
            }

            input,
            textarea,
            .submit-btn {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="contact-form-container">
        <h2>Contact Us</h2>
        <form action="thankyou.html" method="POST">
        
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>

            
            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>

            
            <button type="submit" class="submit-btn">Send Message</button>
        </form>

        <
        <div class="footer">
            &copy;allan | Design by <a href="
https://mail.google.com">Gmail.com</a>



<a href="https://www.instagram.com/[username]"><h1>instagram</h1></a>
        </div>
    </div>


    <a href="https://www.instagram.com/[username]"><h1>instagram</h1></a>
</body>


</html>
