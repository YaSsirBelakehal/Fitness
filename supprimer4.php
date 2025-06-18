<?php

include('cnct.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$delete=mysqli_query($connexn,"delete from msg where id ='$id'");
header('location:select4.php');
exit();

}

?>