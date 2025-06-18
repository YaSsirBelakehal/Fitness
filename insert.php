<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connct.php');


$id=$_GET['id'];
$nom=$_GET ['nom'];
$prenom=$_GET ['prenom'];
$genre= $_GET['genre'];
$adresse=$_GET ['adresse'];
$tel=$_GET ['tel'];
$cin=$_GET ['cin'];

$birth=$_GET ['birth'];

$email=$_GET ['email'];

$password=$_GET ['password'];

$package=$_GET['package'];
$pay=$_GET ['pay'];
$code=$_GET ['code'];


 


$insert=mysqli_query($conect, "INSERT INTO rsrv (nom,prenom,genre,adresse,tel,cin,birth,email,password,package,pay,code) values ('$nom','$prenom','$genre','$adresse','$tel','$cin','$birth','$email','$password','$package','$pay','$code')");
header('location:singupandpay.html');
exit();

?>