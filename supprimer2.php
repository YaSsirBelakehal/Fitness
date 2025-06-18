<?php

include('cnt.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$delete=mysqli_query($coonect,"delete from rsrv2 where id ='$id'");
header('location:select2.php');
exit();

}




?>