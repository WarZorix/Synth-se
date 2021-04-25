<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
<style>

@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body
{
	background-color: #f7e6d0;
	font-family: 'Rubik', sans-serif;
	margin: 0px;
	padding:0px;
}
nav{background: linear-gradient(-10deg ,#ffc4a3,50%,#d38360);
	display: flex;
	box-shadow: 1px 1px 15px black;
}
nav ul
{
	list-style-type: none;
}
a{
	text-decoration: none;
}
.phase{
	display: flex;
	padding: 10px;
	margin: 0px;
	width: 280px;
	margin-left: 130px;
	font-size: 20px;
	justify-content: space-between;
}
.phase a{ color: black; padding-bottom: 50px;}
#Menu{padding-right: 20px;}
.phase a:hover{ 
	text-decoration: underline;}
/* Inscription et Connexion*/
/*
#log a{
	padding: 7px;
	color: black;
	font-size: 20px;
	margin-left: 500px;
	border: 2px solid black;
	border-radius: 10px;
}
#log{margin-left: 0px;}
#sign{margin-left: -20px;}
#sign a{
	padding: 7px;
	color: black;
	font-size: 20px;
	border: 2px solid #a8591d;
	background-color: #a8591d;
	color: #f7e6d0;
	border-radius: 10px;
}
#sign a:hover{
	border: none;
	background: none;
	color: black;
}
*/
.bloc{
	display: none;
}
nav ul li:hover .bloc{
	display: block;
	position: absolute;
	padding: 10px;
	margin-left: 20px;
	margin-top: 30px;
	justify-content: space-between;
	background: linear-gradient(-10deg ,#ffc4a3,30%,#d38360);
	border-radius: 10px;
	box-shadow: 8px 8px 30px black;
}
.branche a{
	color: #a8591d;
}
.branche{
	display: none;
}
nav ul li ul li:hover .branche{
	display: flex;
	padding: 10px;
	margin-left: 60px;
	margin-top: -20px;
	font-size: 18px;
}
.cours{
	display: none;
	padding: 5px;
}
.cours a:hover{ 
		text-decoration: underline;
}
.cours a{
	color: #f7e6d0;
}

nav ul li ul li ul li:hover .cours{
	display: flex;
	flex-direction: column;
	font-size: 16px;
	margin-top: 15px;
	justify-content: space-between;
	height: 300px;
	padding: 5px;
	font-weight: bold;
}
</style>
</head>
<body>
<nav>
	<ul class="phase">
		<li><a href="#">Acceuil</a></li>
		<li><a href="#">Contact</a></li>
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
<!--	<div id="log">
		<ul><li><a href="#">Connexion</a></li></ul>
	</div>
	<div id="sign">
		<ul><li><a href="#">Inscription</a></li></ul>
	</div>-->
</nav>
</body>
</html>