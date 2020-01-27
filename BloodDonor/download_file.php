<html>
<head>
<title>Download Menu</title>
</head>
<body>
<form method="post" action="download.php">

<?php
  $downloads = "images";
  $safeFilename = '/^\w+\.\w+$/';
  $dir = opendir($downloads);
  if (!$dir) {
    die("Bad downloads setting");
  }
  while (($file = readdir($dir)) !== false) 
  {
    // List only files with a safe filename
    if (preg_match($safeFilename, $file)) 
	{
     echo " Click here to download <INPUT TYPE='SUBMIT' name='simage' VALUE='$file'><br><br> ";
    }
  }

  closedir($dir);

?>

<br>

</form>
</body>
</html>



