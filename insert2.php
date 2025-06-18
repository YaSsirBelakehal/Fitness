<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('cnt.php');


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


 


$insert=mysqli_query($coonect, "INSERT INTO rsrv2 (nom,prenom,genre,adresse,tel,cin,birth,email,password) values ('$nom','$prenom','$genre','$adresse','$tel','$cin','$birth','$email','$password')");
header('location:singup.html');
exit();

?>