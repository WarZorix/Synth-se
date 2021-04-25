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
$cal = $_POST['operation'];

if ($cal == "-") {
	$tot = $un - $deux;
	echo "La soustraction de ".$un." et ".$deux." vaut ".$tot;
}
elseif ($cal == "/" && $deux == 0) {
	echo "Malheureusement ce n'est pas possible de calculer";
}
elseif ($cal == "/") {
	$tot = $un / $deux;
	echo "La division de ".$un." et ".$deux." vaut ".$tot;
}
elseif ($cal == "*") {
	$tot = $un * $deux;
	echo "La multiplication de ".$un." et ".$deux." vaut ".$tot;
}
else{
	$tot = $un + $deux;
	echo "L'addition de ".$un." et ".$deux." vaut ".$tot;
}	


?>
	
</p>

</body>
</html>