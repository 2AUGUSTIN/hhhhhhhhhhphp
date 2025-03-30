


 
<?php
$con=mysqli_connect("localhost","root","","aug");

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
    <input type="submit" name="delet">

  </form>
</body>
</html>
<?php

include "connection.php";
?>

<?php

if (isset($_POST['Delet'])) {
  $del=$_GET['Id'];
  $sql = "DELETE FROM users WHERE Id=Id";
  
}

?>