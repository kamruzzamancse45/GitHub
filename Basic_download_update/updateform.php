<?php
 $con=mysqli_connect("localhost","root","","dbemployee");
 $query="select * from tblhr where eid=$_GET[id]";
 $data=mysqli_query($con,$query );

$r=mysqli_fetch_array($data);

	echo "<form action=update.php method=post>
		  ID:<input type=text name=eid value='$r[eid]' disabled><br>
		     <input type=hidden name=eid value='$r[eid]'>
		  Name:<input type=text name=ename value='$r[ename]'><br>
		  Designation:<input type=text name=edesig value='$r[edesig]'><br>
		  <input type=submit value=Update>
	      </form> 
		 ";

 
 ?>