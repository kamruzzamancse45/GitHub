<?php
$con = mysqli_connect("localhost","root","","dbStudent");

$q="UPDATE tblstudent SET sname='$_POST[sname]', batch='$_POST[batch]', dept='$_POST[dept]' WHERE sid='$_POST[sid]'";
//$q="UPDATE tblstudent SET sname = '$_POST[sname]', batch = '$_POST[batch]', dept = '$_POST[dept]' WHERE sid = '$_POST[sid]'";
mysqli_query($con,$q);
echo $_POST['sid'];
echo "<meta http-equiv=refresh content=0;http://localhost/47web/view.php>";
?>