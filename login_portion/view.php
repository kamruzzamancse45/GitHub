<?php
$con = mysqli_connect("localhost","root","","dbStudent");
$q="select * from tblstudent";

$arr=mysqli_query($con,$q);
echo "<table border=1 width=400px>
		<th>Name</th><th>ID</th><th>Batch</th><th>Department</th><th>Action</th>";
while($row=mysqli_fetch_array($arr))
{
	echo "
	<tr>
		<td>
	       $row[sname]
		</td>
		<td>
			$row[sid]
		</td>
		<td>
	       $row[batch]
		</td>
		<td>
			$row[dept]
		</td>
		<td>
			<a href=delete.php?id=$row[sid]>Delete</a><br>
			<a href=updateForm.php?id=$row[sid]>Update</a>
		</td>
	</tr>
	";	
}
echo "</table>";
echo "<br>Do you insert again?<a href=regiForm.php>Click here</a>";
?>
