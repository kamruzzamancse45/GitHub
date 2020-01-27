<?php
$con = new mysqli("localhost", "root", "", "dbdonor");

$sql = "delete from tbldonor where did=$_GET[did]";

mysqli_query($con,$sql);

header("Location:http://localhost/BloodDonor/view.php");
?>

