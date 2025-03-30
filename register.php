<?php
$con=mysqli_connect("localhost","root","","update");
 
if(isset($_POST["send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = " SELECT * FROM `registration` ";
    $result = mysqli_query($con, $query);
    if($result){
    echo "success";
};
   
            
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <th>name</th>
                <th>email</th>
                <th> password</th>

            </tr>
            
            <tr>
                <td><?php echo $result["name"] ?></td>
                <td><?php echo $result["email"] ?></td>
                <td><?php echo $result["password"] ?></td>
            </tr>
            <?php 
             $x=mysqli_fetch_assoc($result);
            ?>
        </table>
    </form>
    
</body>
</html>
 