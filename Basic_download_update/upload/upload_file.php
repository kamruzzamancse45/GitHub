<?php
if ($_FILES["file1"]["error"] > 0) 
{
  echo "Error: " . $_FILES["file1"]["error"] . "<br>";
} 
else 
{
 
  if (file_exists("pictures/" . $_FILES["file1"]["name"])) {
      echo $_FILES["file1"]["name"] . " already exists. ";
    } 
 else {
      move_uploaded_file($_FILES["file1"]["tmp_name"], "pictures/" . $_FILES["file1"]["name"]);
      
    }
}
?>