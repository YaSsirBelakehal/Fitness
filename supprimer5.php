<?php

include('conx.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$delete=mysqli_query($conxe,"delete from image where id ='$id'");
header('location:select5.php');
exit();

}




?>