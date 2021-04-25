<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon formulaire</title>
</head>
<body>

<form method="POST" action="./result-3.php">
	<p>Nom :<input type="text" name="nom"/></p>
	<p>Age :<input type="number" name="age"/></p>
	<p><label for="sexe">Sexe :</label>
	<select name="sexe">
		<option value="rien">---Choisissez le sexe---</option>
		<option value="Monsieur">Homme</option>
		<option value="Madame">Femme</option>
	</select></p>
	<p><input type="submit"/></p>
</form>

</body>
</html>