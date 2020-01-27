<html>
<body>
<?php 
 $con=mysqli_connect("localhost","root","","dbdonor");
 $query="select * from tbldonor where did=$_GET[did]";
 $data=mysqli_query($con,$query );

 $r=mysqli_fetch_array($data);
?>
<form action="update.php" method="post">
ID:<input type="text" name="did" value="<?php echo $r['did'];?>"disabled>
<input type="hidden" name="did" value="<?php echo $r['did'];?>">
<br>
Password:<input type="text" name="dpass" value="<?php echo $r['dpass'];?>"><br>
Name:<input type="text" name="dname" value="<?php echo $r['dname'];?>"><br>
Email:<input type="text" name="demail" value="<?php echo $r['demail'];?>"><br>
Image:<input type="file" name="file" id="file"><br>
<input type="submit" value="Upadate">
</form>
</body>
</html> 
 

<?php
 /*$con=mysqli_connect("localhost","root","","dbcustomer");
 $query="select * from tblcustomer where id=$_GET[id]";
 $data=mysqli_query($con,$query );

$r=mysqli_fetch_array($data);

	echo "<form action=update.php method=post>
		  ID:<input type=text name=id value='$r[id]' disabled><br>
		     <input type=hidden name=id value='$r[id]'>
		  Name:<input type=text name=name value='$r[name]'><br>
		  Password:<input type=text name=pass value='$r[pass]'><br>
		  Email:<input type=text name=email value='$r[email]'><br>
		  <input type=submit value=Update>
	      </form> 
		 ";

 */
 ?>