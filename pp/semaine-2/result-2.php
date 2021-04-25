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
$trois = $_POST['trois'];

if ($un > $deux AND $deux > $trois) {
	echo $un." est plus grand que ".$deux." et ".$trois;
}
elseif ($un > $trois AND $trois > $deux) {
	echo $un." est plus grand que ".$trois." et ".$deux;
}
elseif ($deux > $un AND $un > $trois ) {
	echo $deux." est plus grand que ".$un." et ".$trois;
}
elseif ($deux > $trois AND $trois > $un) {
	echo $deux." est plus grand que ".$trois." et ".$un;
}
elseif ($trois > $un AND $un > $deux ) {
	echo $trois." est plus grand que ".$un." et ".$deux;
}
elseif ($trois > $deux AND $deux > $un) {
	echo $trois." est plus grand que ".$deux." et ".$un;
}
else{
	echo "Un des trois chiffres est identique...";

}
?>
	
</p>

</body>
</html>