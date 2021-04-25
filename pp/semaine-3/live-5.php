<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site</title>
</head>
<body>
<p style="font-size: 25px;font-family: sans-serif;">

<?php 

$un = $_POST['un'];
$deux = $_POST['deux'];

for ($un=$un; $un < $deux; $un+$un) { 
	$tot = $un + $un;
}
echo $tot;
?>
	
</p>

</body>
</html>