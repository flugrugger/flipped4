<!DOCTYPE html>
<html>
<head>
	<title>Worldwide Museums</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="museum.js"></script>
<?php
  include "connecttodb.php";
?>
<h1>Museums of the World </h1>
Select your museum:
<form action="" method="post">
<select name="pickamuseum" id="pickamuseum">
<?php
 include "getmuseum.php";
?>
  <option value="1">Select Here</option>
	
<hr>
</select>
</form>
<hr>
<?php
if(isset($_POST['pickamuseum'])) {
 include "connecttodb.php";
 include "getartwork.php";
}
?>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

