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

if ($deux > $un) {
	for ($un = $un; $un < $deux+1; $un++) { 
		echo $un." ";
	}
}
elseif ($un > $deux) {
	for ($deux = $deux; $deux < $un+1; $deux++) { 
		echo $deux." ";
	}
}
else{
	echo "ERROR";

}
?>
	
</p>

</body>
</html>