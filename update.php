<?php

include('connct.php');
$id=$_GET ['id'];
$select=mysqli_query($conect,"SELECT * FROM rsrv where id='$id'");
$info=mysqli_fetch_array($select);

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/stylsheet.css'>
    <title>SIGNUP AND PAY</title>
</head>
<body>
    <div class='Container'>
        <form action='update2.php' method='get'>
            <h2>SIGNUP AND PAY</h2>
            <div class='content'>
                <div class='input-box'>
                    <label>First Name :</label>
                    <input type='text' placeholder='Enter FirstName' name='nom' value='".$info['nom']."' required>
                </div>
                <div class='input-box'>
                    <label>Last Name :</label>
                    <input type='text' placeholder='Enter LastName' name='prenom' value='".$info['prenom']."' required>
                </div>
                <div class='input-box'>
                    <label>Adress :</label>
                    <input type='text' placeholder='Enter Your Adress' name='adresse' value='".$info['adresse']."' required>
                </div>
                <div class='input-box'>
                    <label>Phone Number :</label>
                    <input type='tel' placeholder='Enter phone number' name='tel' value='".$info['tel']."' required>
                </div>
                <div class='input-box'>
                    <label>Cin :</label>
                    <input type='text' placeholder='Enter cin' name='cin' value='".$info['cin']."' required>
                </div>
                <div class='input-box'>
                    <label>Date of Birth :</label>
                    <input type='date' placeholder='Enter the date of birth' name='birth' value='".$info['birth']."' required>
                </div>
                <div class='input-box'>
                    <label>Gmail :</label>
                    <input type='email' placeholder='Enter your Gmail' name='email' value='".$info['email']."' required>
                </div>
                
                <div class='input-box'>
                    <label>Password :</label>
                    <input type='password' placeholder='************' name='password' value='".$info['password']."' required>
                </div>
                
                <span class='gender-title'>Gender :</span>
                <div class='gender-category'>
                    <input type='radio' name='genre' value='MALE'>
                    <label>MALE</label>
                    <input type='radio' name='genre' value='FEMALE'>
                    <label>FEMALE</label>
                  
                </div>
                <span class='gender-title'>PACKAGES :</span>
                <div class='gender-category'>
                    <input type='radio' name='package' value='basic'>
                    <label>BASIC</label>
                    <input type='radio' name='package' value='diamond'>
                    <label>DIAMOND</label>
                    <input type='radio' name='package' value='premium'>
                    <label>PREMIUM</label>
                  
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