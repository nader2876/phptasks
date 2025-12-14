<?php 
session_start();
$_SESSION['username']= $_POST['username'];
$_SESSION['role']=$_POST['role'];
if($_SERVER["REQUEST_METHOD"]=='POST')
{


if ($_POST['role']=='admin')
{
header("Location: admin.php");

}else if ($_POST['role']=='user')


{

header("Location: user1.php");

}

}





?>