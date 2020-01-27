<?php
$con = new mysqli("localhost", "root", "", "dbdonor");

$sql = "UPDATE tbldonor SET dpass = '$_POST[dpass]',dname = '$_POST[dname]',demail = '$_POST[demail]' WHERE tbldonor.did = '$_POST[did]';";

mysqli_query($con,$sql);

header("Location:http://localhost/BloodDonor/view.php");
?>

