  <?php 
  session_start();

  echo "hi  ".$_SESSION['username']. "ur role is" . $_SESSION['role'];
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 


?>
    <a href="home.php" >logout</a>
</body>

</html>