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

$nbneg = $nb - $nb - $nb;


for ($nbneg=$nbneg; $nbneg < $nb+1; $nbneg++) { 
	echo $nbneg." ";
}
?>
	
</p>

</body>
</html>