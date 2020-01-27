<?php
$con = mysqli_connect("localhost","root","","dbStudent");

$q="DELETE FROM tblstudent WHERE sid = $_GET[id]";

mysqli_query($con,$q);

echo "<meta http-equiv=refresh content=0;http://localhost/47web/view.php>";
?>