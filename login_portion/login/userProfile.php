<?php session_start();?>
<html>
	<head>
		<title>Profile Page</title>
		
	</head>
	<body>
	<a href="logout.php?r=0">Logout</a><br>
	<a href="logout.php?id=1">Delete</a>
	<br> 
	<?php
	if($_SESSION['userid'])
	{
		echo "User ID:".$_SESSION['userid'].
		"<h3>  Welcome to user Profile</h3>";
	
	}?>
				
	</body>
</html>