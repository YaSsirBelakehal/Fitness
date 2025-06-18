<?php


 include('cnnnct.php');
$select=mysqli_query($conectee,"SELECT * FROM rsrv3");

echo "<table border='3'><tr><th>ID</th><th>GMAIL</th><th>PASSWORD</th><th>pay</th><th>code</th><th>DELETE</th><th>UPDATE</th></tr>";

while ($row = mysqli_fetch_array($select)){ 

echo "<tr><td>".$row['id']. "</td>";
echo "<td>".$row['email']. "</td>";
echo "<td>".$row['password']. "</td>";
echo "<td>".$row['pay']. "</td>";
echo "<td>".$row['code']. "</td>";

 
echo "<td><form action='supprimer3.php' method='get'>

<input type='submit' value='delete'>
<input type='hidden' name='id' value='".$row['id']."'>

</form>
</td>

<td><form action='update5.php' method='get'>

<input type='submit' value='update'>
<input type='hidden' name='id' value='".$row['id']."'>



</form>
</td>

</tr>";


}

echo"<a href='choose.html'><h1>RETURN</h1></a>";

?> 
