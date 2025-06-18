<?php

include('connct.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$delete=mysqli_query($conect,"delete from rsrv where id ='$id'");
header('location:select.php');
exit();

}




?>