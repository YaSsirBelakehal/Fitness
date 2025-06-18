<?php

include('cnnnct.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$delete=mysqli_query($conectee,"delete from rsrv3 where id ='$id'");
header('location:select3.php');
exit();

}




?>