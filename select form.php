<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title></title>
    <style>
       *{
           color: blue;
           background-image: blue;
           padding-top: 17px;
           margin-left: 33px;
        

       }
       body{
              background-color: pink;
              border-radius: 90px;
             text-align: center;
             font-size: 20px;

       }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">Name</label>
            <input type="text" name="name" required>
        <br><br>
        <label for="">Email</label>
            <input type="text" name="email" required><br><br>
            <label for="">password</label>
            <input type="password"  name="password" required><br><br>
            <button type="LOGIN" name="send">LOGIN</button>
          
            
    
    </form>
</body>
</html>

<?php

 
 include "connection.php";
if(isset($_POST["send"])){
    $name = $_POST["name"];
     $email = $_POST["email"];
    $password = $_POST["password"];

  $query = " SELECT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($con, $query);
    if($query){
        echo "Data inserted successfully";
        header("location:update");
    }
    else{
        echo "Data not inserted";
    }
}
    
?>

