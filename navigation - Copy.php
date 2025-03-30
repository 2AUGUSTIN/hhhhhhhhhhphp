<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Information</title>
    <style>
       
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin-top: -1.3REM; 
        }

       
        div.container {
            background-image: url("aaaaa.png");
            background-size: cover;
            background-position: center;
            height: 500px;
            font-size: 20px;
            color: black;
            width: 70%;
            margin: 30px auto;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            border: 3px solid #f1f1f1;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

       
        .pp p {
            font-size: 16px;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.6;
        }

       
        .image-gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

       
        .image-item {
            width: 30%;
            text-align: center;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            padding: 10px;
            background-color: #fff;
        }

        .image-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover; }
        .buy-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .buy-button:hover {
            background-color: blue;
        }

       
        @media (max-width: 768px) {
            .image-gallery {
                flex-direction: column;
                align-items: center;
            }

            .image-item {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<form action="bbuy.php" method="post">
    <div class="container">
    
        <nav class="pp">
            <h1>Car Information</h1>
            <p>
                Cars are one of the most widely used forms of transportation around the world. They are powered by internal combustion engines (though there are also electric and hybrid cars), and come in a variety of types, sizes, and designs to suit different needs and preferences.
            </p>
        </nav>

        
        <div class="image-gallery">
            <div class="image-item">
                <img src="images (1).jfif" alt="Car 1">
                <button class="buy-button">Buy Car 1</button>
            </div>
            <div class="image-item">
                <img src="wew.jpeg" alt="Car 2">
                <button class="buy-button">Buy Car 2</button>
            </div>
            <div class="image-item">
                <img src="hhh.jpg" alt="Car 3">
                <button class="buy-button">Buy Car 3</button>
            </div>
        </div>
        
    </div>
    </form>
</body>
</html>
