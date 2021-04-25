<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site</title>
</head>
<body>
<p>

<?php 

$nom = $_POST['nom'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
if ($age <= 1) {
	echo $sexe." ".$nom." a ".$age." an";
}
else{
 echo $sexe." ".$nom." a ".$age." ans";
}

?>
	
</p>

</body>
</html>