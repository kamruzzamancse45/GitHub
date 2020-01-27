<?php
 $con=mysqli_connect("localhost","root","","dbemployee");
 $query="update tblhr set ename='$_POST[ename]', edesig='$_POST[edesig]' where eid=$_POST[eid]";
 $data=mysqli_query($con,$query );
 
 echo "<meta http-equiv=refresh content=0;http://localhost/48web/view.php>";
 ?>