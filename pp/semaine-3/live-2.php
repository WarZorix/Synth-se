<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site</title>
</head>
<body>
<p style="font-size: 25px;font-family: sans-serif;">

<?php 

$nb = $_POST['nb'];
$color = $_POST['color'];


if ($nb % 2 === 0 || $color == "blue") {
	echo "OK";
}
else{
	echo "NOK";

}
?>
	
</p>

</body>
</html>