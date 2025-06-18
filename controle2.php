<?php

include('cnt.php');

$email1=$_GET ['email1'];
$password1=$_GET['password1'];

$select=mysqli_query($coonect,"SELECT * FROM rsrv2");

while ($row=mysqli_fetch_array($select)) {
if ($email1.$password1 == $row['email'].$row['password']) {

    header('location:home2.html');
    exit();
}
else { header('location:login4.html');
}}


?>