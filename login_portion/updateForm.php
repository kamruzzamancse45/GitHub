<html>
<head>
<title>Page1</title>
</head>
<body>
<h3>Update your information</h3>
<?php
$con = mysqli_connect("localhost","root","","dbStudent");

$q="select * from tblstudent where sid=$_GET[id]";

$arr=mysqli_query($con,$q);

$row=mysqli_fetch_array($arr);

	echo 
	"<form action=update.php method=post>
		ID:$row[sid]<br>
		<input type=hidden name=sid value=$row[sid]>
		Name:<input type=text name=sname value=$row[sname]><br>
		Batch:<input type=text name=batch value=$row[batch]><br>
		Department: <input type=text name=dept value=$row[dept]><br>
		<input type=submit value=Update><br>
	</form>";
 ?>
</body>
</html>