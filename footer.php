<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Footer</title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
	body{background-color: #ececec;}
	html,body{height: 50%;}
	dir{min-height: 90%;}
	footer{
	width: 100%;
	font-size: 18px;
	font-family: 'Rubik', sans-serif;
	/*border: 2px solid black;*/
	margin-top: -153px;
	height: 150px;
	background: linear-gradient(150deg ,#d38360,80%,#ffc4a3);
	color: black;
	clear: both;
	box-shadow-top: -10px -15px 20px black;
	}
	#form{
		padding-top: 15px;
		width: 300px;
		margin-left: 10%;
	}
	input[type=text], textarea[type=text] {
		outline: none;
		border: 2px solid #a8591d;
		border-radius: 10px;
		width: 110px;
		padding: 4px;
		background-color: #f7e6d0;
	}
	input[type=text]:focus, input[type=number]:focus, textarea[type=text]:focus {
		border-color: #a8591d;
		box-shadow: 0 0 20px 0 black;}
	input[type=number]{
		outline: none;
		border: 2px solid #a8591d;
		border-radius: 10px;
		width: 43px;
		padding: 4px;
		background-color: #f7e6d0;
	}
	input[type=submit]{
		outline: none;
		border-radius: 10px;
		border: none;
		padding: 5px;
		margin-left: 70%;
		margin-top: -5px;
		background-color: #f7e6d0;
		font-weight: bold;
		border: 2px solid #a8591d;
 	}
 	input[type=submit]:hover{
 	cursor: pointer;
 	border: none;
 	text-decoration: underline;
 }
#aide
{
	width: 330px;
	height: 70px;
	margin-left: 72%;
	padding-top: 30px;
	font-size: 20px;
}
#aide a{
	color: blue;
}
#aide a:hover{
	text-decoration: underline;
}
#aide2
{
	width: 500px;
	height: 100px;
	margin-left: 12%;
	margin-top: -85px;
	font-size: 20px;
	padding: 3px;
}
#aide2 a{
	color: blue;
}
#aide2 a:hover{
	text-decoration: underline;
}

	</style>
</head>
<body>

<dir>
	
</dir>
<footer>
	<!--Avis avec étoiles, bouton avec si vous voudriez ajouter votre synthèse ?-->

<div id="aide">
	Vous voulez vous aussi venir en aide aux autres en ajoutant votre synthèse ? <a href="./contact.php">VOUS POUVEZ !</a>
</div>
<div id="aide2">
	Vous avez besoin d'aide ? Vous voulez que j'ajoutes une synthèse pour un certain cours ? Vous pouvez me contacter à mon email (<a href="mailto:HE127568@students.ephec.be">Mon Email</a>) ou venir sur</br> un serveur discord ;) <a href="https://discord.gg/xerPUCGDJw" target="_blank"> Rejoindre</a> 
</div>
<?php


?>

</footer>

</body>
</html>