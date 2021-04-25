<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site</title>
</head>
<body>
<p>

<?php 

$un = $_POST['un'];
$deux = $_POST['deux'];

if ($un > $deux) {
	echo $un." est plus grand que ".$deux;
}
elseif ($deux > $un) {
	echo $deux." est plus grand que ".$un;
}
else{
	echo $un." est égal à ".$deux;

}
?>
	
</p>

</body>
</html>