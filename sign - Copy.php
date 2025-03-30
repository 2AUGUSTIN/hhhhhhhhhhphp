<!DOCTYPE html>

<head>
    <title>l4</title>

    
    <style>
     
     * {
            
            background c
              height: 50px;
              width: 350px;
              text-align: center;
              
             }
             body{
     
         
                 height: 400px;
                 
     
                 
                 width: 700px;
                 margin: 0 auto;
                 padding: 20px;
                 font-family: Arial, sans-serif;
                 color: black;
                 border-radius: 5px;
                 box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
                 overflow: hidden;
                 display: flex;
                 flex-direction: column;
                 justify-content: center;
                 align-items: center;
                 transition: background-color 0.5s ease-in-out;
                 background-color: #f2f2f2;
                 
     
     
                 
             }
         
             *{
                 font-size: 20px;
                 margin: 20px 0;
                 padding: 10px;
                 border: none;
                 border-radius: 5px;
                 cursor: pointer;
                 transition: background-color 0.3s ease-in-out;
                 background-color: block;
             }
             *{
                 background-color: ;
                
     
             }
             *:hover{
                 background-color: #ddd;
             }
             input[type="text"], input[type="password"]{
                 width: 100%;
                 padding: 10px;
             }
             button{
                 width: 100%;
                 padding: 10px;
                 background-color: #4CAF50;
                 color: white;
                 border: none;
                 border-radius: 5px;
                 cursor: pointer;
             }
             button:hover{
                 background-color: #45a049;
             }
             .error{
                 color: red;
                 font-size: 15px;
             }
             .success{
                 color: green;
                 font-size: 15px;
             }
             .{
                 display: flex;
                 flex-direction: column;
                 align-items: center;
                 justify-content: center;
                 margin-top: 20px;
                 margin-bottom: 20px;
                 padding: 10px;
                 
                 cursor: pointer;
     
                 
             }
   </style>
</head>

<body>
        <form action="" method="post">
           
            <label for="">usrnam</label>
            <input type="text" name="us nam" placeholder="us nam">
            <br>
            <br>
            <label for="">password</label>
            <input type="password" name="passwor" placeholder="passwor">
            <br>
            <br>
            <button type="submit" name="login">login</button>
            
           
        </form>


</body>

</html>
<?php/*
$conn = mysqli_connect(("localhost","root","","augustin"));{
    if ($ccon) {
        echo "Database connection failed";
       
    }
    else
    echo"is not  login";
}
if(isset($_POST['login'])); {

    $username = $_POST['us nam'];
    $password = $_POST['passwor'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1); {
        echo "Login successful";
    
}}


?>