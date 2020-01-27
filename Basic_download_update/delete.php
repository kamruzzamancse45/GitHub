<?php
$con=mysqli_connect("localhost","root","","dbemployee");
 $query="delete from tblhr where eid=$_GET[id]";
 mysqli_query($con,$query );
 
 echo "<meta http-equiv=refresh content=0;http://localhost/48web/view.php>";

?>