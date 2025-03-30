<!DOCTYPE html>
<html lang="en">
<head>
   
    <title></title>
    <style>
      *{
        background-color:blueviolet;
        font-size: 20px;
        text-align: center;
        
    
       

      }
    </style> 
    </style>
</head>
<body>

    <h1>signup</h1>
    <form action="" method="post">


        <label for="">Name</label>
            <input type="text" name="name" required>
        <br><br>
        <label for="">Email</label>
            <input type="text" name="email" required><br><br>
            <label for="">password</label>
            <input type="password"  name="password" required><br><br>
            <button type="submit" name="send">Submit</button>

        
    </form>
</body>
</html>
<?php
 include "connection.php";
if(isset($_POST["send"])){
    $name = $_POST["name"];
     $email = $_POST["email"];
    $password = $_POST["password"];
  $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($con, $query);
    if($result){
        echo "Data inserted successfully";
    }
    else{
        echo "Data not inserted";
    }
}
 

?>

