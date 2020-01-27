<?php
$con = new mysqli("localhost", "root", "", "dbdonor");
$sql = "select * from tbldonor";
$result=mysqli_query($con,$sql);
if ($result)
  {
  $result=mysqli_query($con,$sql);
  echo "<table border=1>
		<tr><th>Donor ID</th>
		    <th>Donor Name</th>
			<th>Email</th>
			<th>Image</th>
			<th>Action<th>
		</tr>";		
  while ($row=mysqli_fetch_array($result))
    {
		echo "<tr>
			<td>$row[did]</td>
		    <td>$row[dname]</td>
			<td>$row[demail]</td>
			<td><img src=images/$row[dimage] height=50px width=80px></td>
			<td><a href='delete.php?did=$row[did]'>Delete</a><br>
			    <a href='updateform.php?did=$row[did]'>Update</a> 
			</td>
		    </tr>";	
	}
	echo "</table>";
  }
  
  echo "<br>New Registration? <a href=resistrationForm.php>Click here</a>.";
?>