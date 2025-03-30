<?php
    include "connection.php";
   
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    
</head>


<body bgcolor="pink">
    <center>
        <h1>MORE INFORMATION</1>
      <table border="1" cellspacing="0">
        <tr>
         <th>id</th>
         <th>name</th>
         <th>email</th>
         <th>password</th>
         <th>choose option</th>

        </tr>
        <?php 
         $sele=mysqli_query($con,"SELECT * from users");
while($row=mysqli_fetch_assoc($sele)){
    ?>
    
    
    <tr>

    <td><?php echo $row["Id"];  ?></td>
    <td><?php echo$row["name"];  ?></td>
    <td><?php echo$row["email"];  ?></td>
    <td><?php echo$row["password"];  ?></td>
    <td><a href="#">edit</a>
    <a href="delet.php?id=<?php echo $row['Id']; ?>">delete</a>
  <a href="edit.php?id=<?php echo $row ['Id']; ?>">vue</a>
</td>
</tr>
    <?php }?>
    

        
      </table>   
 </table>
    </center>
</body>
</html>



    