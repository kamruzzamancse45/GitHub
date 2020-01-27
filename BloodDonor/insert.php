 <?php
$conn = new mysqli("localhost", "root", "", "dbdonor");


$file=$_FILES["dimage"]["name"];

$sql = "INSERT INTO tbldonor VALUES ('$_POST[did]', '$_POST[dpass]', '$_POST[dname]', '$_POST[demail]', '$file')";


$conn->query($sql);
 move_uploaded_file($_FILES["dimage"]["tmp_name"], "images/" . $_FILES["dimage"]["name"]);

header("Location:http://localhost/BloodDonor/view.php");

?> 