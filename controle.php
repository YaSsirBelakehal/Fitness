<?php

include('connexion.php');

$username1 = $_GET['username1'];
$password1 = $_GET['password1'];

$req=mysqli_query($connect,"SELECT * FROM fill");

while ($info=mysqli_fetch_array($req)) {
if ($username1.$password1 == $info['username'].$info['password']) {

    header('location:choose.html');
    exit();
}
else { header('location:login2.html');
}}



?>