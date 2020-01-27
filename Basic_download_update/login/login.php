
<?php  session_start();
$_SESSION['id']=$_POST['uid'];
 $con=mysqli_connect("localhost","root","","dbemployee");
 $query="select * from tbluser where uid=$_POST[uid]";
 $data=mysqli_query($con,$query );
 if($data)
 {
 $r=mysqli_fetch_array($data);
	if($r&&$r['pass']==$_POST['pass'])
	{
		 echo "<meta http-equiv=refresh content=0;http://localhost/48web/login/userHome.php>";
	}
	else
		header('Location: http://localhost/48web/login/LoginForm.php');
		//echo "<meta http-equiv=refresh content=0;http://localhost/48web/login/LoginForm.php>";
 }
 else
	 header('Location: http://localhost/48web/login/LoginForm.php');
	 //echo "<meta http-equiv=refresh content=0;http://localhost/48web/login/LoginForm.php>";
?>