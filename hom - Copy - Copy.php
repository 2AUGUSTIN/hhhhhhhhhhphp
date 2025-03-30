

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web sit </title>
    <style>
 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background color:black;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom, #ff7e5f, lightblue , lightgreen;);
        
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

       .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 15px 30px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav a {
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px;
            transition: background-color 0.3s ease;
            border-radius: 4px;
        }

        .nav a:hover {
            background-color: #555;
        }

        .nav .active {
            background-color: #1c87c9;
            color: white;
        }

        .nav .login-container {
            display: flex;
            align-items: center;
        }

        .nav input {
            padding: 8px 15px;
            margin-right: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .nav button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #1c87c9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .nav button:hover {
            background-color: #0e6b8b;
        }

        .nav a.signup {
            margin-left: 10px;
            font-size: 14px;
            color: #bbb;
        }
        .content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #333;
        }

        .content p {
            font-size: 1.2rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }

          .content img {
            width: 100%;
            max-width: 1000px; 
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content img:hover {
            transform: scale(1.05); 
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); 
        }

      
        @media screen and (max-width: 768px) {
            .nav {
                flex-direction: column;
                align-items: stretch;
                padding: 10px;
            }

            .nav a {
                padding: 15px;
                width: 100%;
                text-align: center;
            }

            .nav .login-container {
                width: 100%;
                margin-top: 15px;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .nav input,
            .nav button {
                width: 100%;
                margin: 5px 0;
            }

            .nav .signup {
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }

            .content h1 {
                font-size: 2.5rem;
            }

            .content p {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .nav a {
                padding: 10px;
                font-size: 16px;
            }

            .nav input,
            .nav button {
                padding: 10px;
                font-size: 15px;
            }

            .content h1 {
                font: size 90%;
                height: 700px;
                background-image: 
            }

            
            .content img {
                max-width: 700px;
                margin-top: 90%
                
            }
            .content img {
                max-width: 500px;
                margin-top: 90%

                
            }
          }


          body {
      background-color: #f0f0f0;
      color: #333;
      font size:9px
              
            
            }
.pp {
    background-color:white;
  border-radius: 8px;       
  padding: 20px;             
        
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  font-family: 'Arial', sans-serif; 
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
  t

              
}


.pp p {
  line-height: 1.6;          
            
  color: black; 
  margin-bottom: 10px;
  margin-top: 30px;
  bottom: 20px;
  font-size:20px;
                

}

.pp img {
  max-width: 100%;          
  height: auto; 
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  transform: scale(1);
  box: shadow 5px 19px;;            
}
       
    </style>
</head>
<body>

    <div class="nav">
        <a href="kkk.php">Home</a>
        <a href="lll.php">About</a>
        <a href="contact.php">Contact Us</a>
        <a href="#more">More</a>

        <div class="login-container">
            <form action="navigation.php" method="POST">
                <input type="text" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <a href="#" class="signup">Sign Up?</a>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to Our Website!</h1>
        <p>A vehicle from Latin *vehiculum is a machine designed for self-propulsion, usually to transport people, cargo, or both. The term "vehicle" typically refers to...</p>
        <img src="hhh.jpg" alt="Example Image">
    </div>


    <nav class="pp">
<p>Cars are vehicles that are primarily designed for the transportation of people and goods on roads. 
    They are one of the most widely used forms of personal and commercial transportation worldwide. Here’s an overview of cars from various angles:</p>
     <li>
       
     </li>
</nav>

<button>LOCATIO</button>
</body>
</html>
