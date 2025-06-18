<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include('cnnnct.php');




$id=$_GET['id'];


$email=$_GET ['email'];

$password=$_GET ['password'];

$pay=$_GET['pay'];
$code=$_GET ['code'];

 


$insert=mysqli_query($conectee, "INSERT INTO rsrv3 (email,password,pay,code) values ('$email','$password','$pay','$code')");
header('location:home2.html');
exit();

?>