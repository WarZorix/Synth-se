<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon formulaire</title>
</head>
<body>

<form method="POST" action="./result-4.php">
	<p>Numéro 1 :<input type="number" name="un"/></p>
	<p>Numéro 2 :<input type="number" name="deux"/></p>
	<p><label for="operation">Opération :</label>
	<select name="operation">
		<option value="rien">---Choisissez l'opération'---</option>
		<option value="+">Addition</option>
		<option value="-">Soustracrtion</option>
		<option value="*">Multiplication</option>
		<option value="/">Division</option>
	</select></p>
	<p><input type="submit"/></p>
</form>

</body>
</html>