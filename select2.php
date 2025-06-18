<?php


 include('cnt.php');

$select=mysqli_query($coonect,"SELECT * FROM rsrv2");

echo "<table border='3'><tr><th>ID</th><th>NAME</th><th>LAST NAME</th><th>GENDER</th><th>ADRESS</th><th>PHONE NUMBER</th><th>CIN</th><th>DATE OF BIRTH</th><th>GMAIL</th><th>PASSWORD</th><th>DELETE</th><th>UPDATE</th></tr>";

while ($row = mysqli_fetch_array($select)){ 

echo "<tr><td>".$row['id']. "</td>";
echo "<td>".$row['nom']. "</td>";
echo "<td>".$row['prenom']. "</td>";
echo "<td>".$row['genre']. "</td>";
echo "<td>".$row['adresse']. "</td>";
echo "<td>".$row['tel']. "</td>";
echo "<td>".$row['cin']. "</td>";
echo "<td>".$row['birth']. "</td>";
echo "<td>".$row['email']. "</td>";
echo "<td>".$row['password']. "</td>";

 
echo "<td><form action='supprimer2.php' method='get'>

<input type='submit' value='delete'>
<input type='hidden' name='id' value='".$row['id']."'>

</form>
</td>

<td><form action='update3.php' method='get'>

<input type='submit' value='update'>
<input type='hidden' name='id' value='".$row['id']."'>



</form>
</td>

</tr>";


}

echo"<a href='choose.html'><h1>RETURN</h1></a>";

?> 
