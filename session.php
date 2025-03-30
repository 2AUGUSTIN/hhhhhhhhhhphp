<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session.php</title>
</head>
<body>

    <h2>Login Form</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","aug");
{
    if($con){
        echo"connect databasea";
    }
    else{
        echo"dont  connect";
    }

}
$query=mysqli_query()
?>
<?php/*
session_start();
if(isset['login'])
  
    


$_SESSION["username"] = "john_doe";
$_SESSION["password"] = "admin";


?>