<?php
/*echo $_POST['eid']."<br>";
echo $_POST['ename']."<br>";
echo $_POST['edesig']."<br>";*/
 $con=mysqli_connect("localhost","root","","dbemployee");
 $pic=$_FILES["pic"]["name"];
 $query="insert into tblhr values('$_POST[eid]','$_POST[ename]','$_POST[edesig]','$pic')";
 
 mysqli_query($con,$query );
 move_uploaded_file($_FILES["pic"]["tmp_name"], "pictures/" . $_FILES["pic"]["name"]);

 echo "<meta http-equiv=refresh content=0;http://localhost/48web/view.php>";

 ?>