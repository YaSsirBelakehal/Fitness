<?php
include('cnnnct.php');

$id=$_GET['id'];

$email1=$_GET ['email'];

$password1=$_GET ['password'];

$pay1=$_GET['pay'];
$code1=$_GET ['code'];
 
$update=mysqli_query($conectee, "UPDATE rsrv3 SET email='$email1',password='$password1',pay='$pay1',code='$code1' where id='$id'");
header('location:select3.php');
exit();

?>