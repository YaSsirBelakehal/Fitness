<?php

include('cnnnct.php');
$id=$_GET ['id'];
$select=mysqli_query($conectee,"SELECT * FROM rsrv3 where id='$id'");
$info=mysqli_fetch_array($select);

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/stylsheet.css'>
    <title>PREMIUM PACKAGE</title>
</head>
<body>
    <div class='Container'>
        <form action='update6.php' method='get'>
            <h2>PREMIUM PACKAGE</h2>
            <div class='content'>
                
                <div class='input-box'>
                    <label>Gmail :</label>
                    <input type='email' placeholder='Enter your Gmail' name='email' value='".$info['email']."' required>
                </div>
                
                <div class='input-box'>
                    <label>Password :</label>
                    <input type='password' placeholder='************' name='password' value='".$info['password']."' required>
                </div>
                
                <span class='gender-title'>PAY WITH :</span>
                <div class='gender-category'>
                    <input type='radio' name='pay' value='paypal'>
                    <label>PayPal</label>
                    <input type='radio' name='pay' value='visa'>
                    <label>VISA</label>
                  
                </div>
                <div class='input-box'>
                    <label>Number/Code :</label>
                    <input type='text' placeholder='************' name='code' value='".$info['code']."' required>
                </div>
            </div>
            
            <center><input type='submit' value='UPDATE'>
                    <input type='hidden' name='id' value='$id'></center>
        </form>
    </div>
</body>
</html>";

?>