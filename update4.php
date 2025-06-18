<?php
include('cnt.php');

$id=$_GET['id'];
$nom1=$_GET ['nom'];
$prenom1=$_GET ['prenom'];
$genre1= $_GET['genre'];
$adresse1=$_GET ['adresse'];
$tel1=$_GET ['tel'];
$cin1=$_GET ['cin'];

$birth1=$_GET ['birth'];

$email1=$_GET ['email'];

$password1=$_GET ['password'];


$update=mysqli_query($coonect, "UPDATE rsrv2 SET nom='$nom1',prenom='$prenom1',genre='$genre1',adresse='$adresse1',tel='$tel1',cin='$cin1',birth='$birth1',email='$email1',password='$password1' where id='$id'");
header('location:select2.php');
exit();

?>