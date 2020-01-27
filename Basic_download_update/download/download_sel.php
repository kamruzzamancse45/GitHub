<html>
<head>
<title>Download Menu</title>
</head>
<body>
<form method="GET" action="download.php">
<select name="filename">
<?php
  $downloads = "downloads";
  $safeFilename = '/^\w+\.\w+$/';
  $dir = opendir($downloads);
  if (!$dir) {
    die("Bad downloads setting");
  }
  while (($file = readdir($dir)) !== false) {
    // List only files with a safe filename
    if (preg_match($safeFilename, $file)) {
?>
<option value="<?php echo $file?>"><?php echo $file?></option>   
<?php
    }
  }
  closedir($dir);
?>
</select>
<br>
<input type="submit" name="download" value="Download Selected File">
</form>
</body>
</html>
