<?php
$con = mysqli_connect("localhost","root","","dbStudent");
$q="insert into tblStudent values('$_POST[sname]','$_POST[sid]','$_POST[batch]','$_POST[dept]')";

mysqli_query($con,$q);

echo "<meta http-equiv=refresh content=0;http://localhost/47web/view.php>";
?>