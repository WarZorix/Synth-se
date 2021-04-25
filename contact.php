<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="./contact.css">
</head>
<body>
<nav>
  <ul class="phase">
    <li><a href="./index.php">Acceuil</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a id="Menu" href="#">Menu</a>
      <ul class="bloc">
        <li><a href="#">Bloc 1</a>
          <ul class="branche">
            <li><a href="#">E-Business</a>
              <ul class="cours">
                <li><a href="#">Droit</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Math Fi</a></li>
                <li><a href="#">LPOW</a></li>
                <li><a href="#">Trait de l'info.</a></li>
                <li><a href="#">E-Business</a></li>
                <li><a href="#">E-Commerce</a></li>
                <li><a href="#">Anglais</a></li>
                <li><a href="#">Néerlandais</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
<!--  <div id="log">
    <ul><li><a href="#">Connexion</a></li></ul>
  </div>
  <div id="sign">
    <ul><li><a href="#">Inscription</a></li></ul>
  </div>-->
</nav>
<section>
<div id="content">
	<h1>Avez-vous des questions ou bien</br>vous voulez ajouter du contenu ?</h1></br></br></br>
	<form method="POST" action="action.php" >
		Votre nom : <input type="text" name="name"></br></br>
		Bloc et Quadri : <input type="text" name="bloc"></br></br>
		Votre question : <textarea type="text" name="qst"></textarea></br></br>
		<input type="submit" name="send">
	</form>
</div>
</section>
<footer>
  <!--Avis avec étoiles, bouton avec si vous voudriez ajouter votre synthèse ?-->

<div id="aide">
  Vous voulez vous aussi venir en aide aux autres en ajoutant votre synthèse ? <a href="./contact.php">VOUS POUVEZ !</a>
</div>
<div id="aide2">
  Vous avez besoin d'aide ? Vous voulez que j'ajoutes une synthèse pour un certain cours ? Vous pouvez me contacter à mon email (<a href="mailto:HE127568@students.ephec.be">Mon Email</a>) ou venir sur</br> un serveur discord ;) <a href="https://discord.gg/xerPUCGDJw" target="_blank"> Rejoindre</a> 
</div>

</footer>
</body>
</html>