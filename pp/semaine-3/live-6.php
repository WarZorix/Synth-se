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
$tot = $un/$deux ;

if ($un > 0 && $deux > 0) {
foreach ($tot as $tot) 
	echo $tot.' = '.formatMoney($tot, 0);	
}
else{
	echo "ERROR";
}
?>
	
</p>

</body>
</html>