<?php session_start();?>
<html>
	<head>
		
	</head>
	<body>
	<center>
	<h3>Login</h3>
		<form action="login.php" method="post">
			User ID:<input type="text" name="uid"><br><br>
			Password:<input type="text" name="pass"><br><br>
			<input type="submit" value="Login"><br>
		</form>
		<?php if($_SESSION['userid'])
				{echo "Incorrect user id or password";}?>
	</center>
	</body>
</html>