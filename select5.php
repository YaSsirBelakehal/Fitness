<?php

 include('conx.php');
$select=mysqli_query($conxe,"SELECT * FROM image");

echo "<table border='3'><tr><th>ID</th><th>FILES</th><th>DELETE</th></tr>";

while ($row = mysqli_fetch_array($select)){ 

echo "<tr><td>".$row['id']. "</td>";
echo "<td>".$row['libelle']. "</td>";


echo "<td><form action='supprimer5.php' method='get'>

<input type='submit' value='delete'>
<input type='hidden' name='id' value='".$row['id']."'>

</form>
</td>


</tr>";


}
echo"<a href='choose.html'><h1>RETURN</h1></a>";

?> 
