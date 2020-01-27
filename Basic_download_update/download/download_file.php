<html>
<head>
<title>Download Menu</title>
</head>
<body>
<form method="GET" action="download.php">

<?php
  $downloads = "downloads";
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
     echo " Click here to download <INPUT TYPE='SUBMIT' name='filename' VALUE='$file'><br><br> ";
    }
  }

  closedir($dir);

?>

<br>

</form>
</body>
</html>



