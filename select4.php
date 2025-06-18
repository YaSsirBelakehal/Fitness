<?php


 include('cnct.php');
$select=mysqli_query($connexn,"SELECT * FROM msg");

echo "<table border='3'><tr><th>ID</th><th>GMAIL</th><th>MESSAGE</th><th>DELETE</th></tr>";

while ($row = mysqli_fetch_array($select)){ 

echo "<tr><td>".$row['id']. "</td>";
echo "<td>".$row['email']. "</td>";
echo "<td>".$row['message']. "</td>";

 
echo "<td><form action='supprimer4.php' method='get'>

<input type='submit' value='delete'>
<input type='hidden' name='id' value='".$row['id']."'>

</form>
</td>


</form>
</td>

</tr>";


}

echo"<a href='choose.html'><h1>RETURN</h1></a>";

?> 
