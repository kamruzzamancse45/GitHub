 <?php
 $con=mysqli_connect("localhost","root","","dbemployee");
 $query="select * from tblhr";
 $data=mysqli_query($con,$query );
 echo "<table border=1>
       <tr>
	   <th>ID</th>
	   <th>Name</th>
	   <th>Designation</th>
	   <th>Picture</th>
	   <th>Action</th>
	   </tr>";
 while($r=mysqli_fetch_array($data))
{
	echo "<tr>
			<td>$r[eid]</td>
		    <td>$r[ename]</td>
			<td>$r[edesig]</td>
			<td><a href='download.php?pic=$r[pic]'><img src=pictures/$r[pic] width=50px height=50px></a></td>
			<td>
			<a href=\"delete.php?id=$r[eid]\">Delete</a><br>
			<a href=\"updateform.php?id=$r[eid]\">Update</a>
			</td>
		</tr>";
}
echo "</table>";
echo "Do you <a href=employeeForm.php>insert</a> more eployees?";
 ?>