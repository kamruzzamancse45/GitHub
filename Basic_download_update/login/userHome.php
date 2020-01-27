<?php  session_start(); 
if(isset($_SESSION['id']))
{?>
<html>
	<head>
		
	</head>
	<body>
	<center>
	<h5><a href="logout.php">Logout</a></h3>
	<h3>User Home</h3>
	<?php echo "User ID:".$_SESSION['id'];?>
	<br>User Logged In!!!!!
	</center>
	</body>
</html>
<?php }
else
	echo "User logged out!";?>