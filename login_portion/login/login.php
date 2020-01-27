<?php session_start();

$_SESSION['userid']=$_POST['uid'];

$con = mysqli_connect("localhost","root","","dbStudent");

$q="select * from tbluser where uid=$_POST[uid]";

$arr=mysqli_query($con,$q);
if($arr)
{
$row=mysqli_fetch_array($arr);
if($row['uid']==$_POST['uid']&&$row['pass']==$_POST['pass'])
	echo "<meta http-equiv=refresh content=0;http://localhost/47web/login/userProfile.php>";
else
	echo "<meta http-equiv=refresh content=0;http://localhost/47web/login/loginForm.php>";
}
else
	echo "<meta http-equiv=refresh content=0;http://localhost/47web/login/loginForm.php>";

?>