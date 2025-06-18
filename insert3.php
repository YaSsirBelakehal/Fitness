<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include('cnct.php');





$email=$_GET ['email'];

$message=$_GET ['message'];



 
$insert=mysqli_query($connexn, "INSERT INTO msg (email,message) values ('$email','$message')");
header('location:home2.html');
exit();

?>