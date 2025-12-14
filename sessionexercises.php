<?php 
session_start();

$_SESSION['userRole']= "admin";
echo $_SESSION['userRole'];
echo "<br>";

session_destroy();




?>