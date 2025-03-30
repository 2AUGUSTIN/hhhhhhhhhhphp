<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>more infr Coffee</title>


   <style>
  
body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
    padding: 0;
    background-color:yellowgreen ;
}

h1, {
    margin: 0;
    padding: 0;
}


center h1 {
    color: #333;
    font-size: 2em;
    margin-top: 30px;
    text-transform: uppercase;
}


.image-container {
    margin: 20px auto;
    padding: 20px;
    text-align: center;
}


.augustin {
    background-color:pink;
    padding: 20px;
    margin: 40px auto;
    width: 60%;

}

.augustin p {
    background-color: green;
    color: white;
    padding: 15px;
    font-size: 1.1em;
    line-height: 1.8;
    border-radius: 5px;
}

.augustin h2 {
    color: #333;
    font-size: 1.5em;
    margin-top: 20px;
    font-weight: bold;
}

.augustin  {
    margin-top: 20px;
}


.augustin  {
    font-size: 1.1em;
    line-height: 1.7;
    color: #555;
    margin-top: 10px;
}



   </style>
</head>
<body>
    <center><h1>More Information</h1>
    </center>

    
    <div class="image-container">
      
    </div>

   
    <nav class="augustin">
        <p bg color="red">
        It sounds like you’re interested in food and tea! Both are fascinating subjects with rich histories, traditions, and an endless variety of flavors and styles to explore.
         Let me break it down into some key areas:
</p>
<h2>Food</h2>
<p> Italian: Known for its pasta, pizza, and rich use of olive oil, garlic, tomatoes, and herbs.
Japanese: Famous for sushi, ramen, and delicate presentations. It emphasizes seasonal ingredients and simplicity.</p>
    <h2>Popular Food Types</h2>

    <p>Street Food: Globally, street food is a huge part of many cultures. In Bangkok, it’s pad Thai or mango sticky rice; in New York, it’s hot dogs or pretzels.
Comfort Food: These are dishes that provide nostalgic or emotional comfort, like mac and cheese in the US, shepherd's pie in the UK, or ramen in Japan.
Healthy Eating: Involves meals with a focus on balanced nutrition, often featuring plant-based ingredients like quinoa bowls, smoothies, and salads.
3. Spe</p>
</nav>

<
</body>
</html>
<?php
// Database connection
$servername = "localhost";
$username = "root";  // Use your MySQL username
$password = "";      // Use your MySQL password
$dbname = "aug";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate form fields
    if (empty($userName) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirmPassword) {
        echo "Passwords do not match.";
    } else {
        // Check if email already exists
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "Email is already registered.";
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$userName', '$email', '$hashedPassword')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New user registered successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>
