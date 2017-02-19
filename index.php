<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>BiduleTroc</title>
		<link href="style.css" rel="stylesheet" type ="text/css" media="screen"/>
    </head>
    <body>

	<div id="principal">
		<div id="title">
			<h1>BIDULETROC</h1>
		</div>
		<div class="column">
				<ul>
				<li> <h3>Recherche</h3> </li>
				<li> Catégorie <select name="Categorie" id="Categorie">
									<option value="Meuble">Meuble</option>
									<option value="Ustensile">Ustensile</option>
									<option value="Livres">Livres</option>
									<option value="Jeux">Jeux Vidéos/DVD/CD</option>
									<option value="Vetements">Vetements</option>
									<option value="Divers">Divers</option>
									<option value="Hitech">Hi-tech</option>
									<option value="Outils">Outils</option>
									<option value="Sports">Sports</option>
								</select> </li>
				<li> Mot clef <input type="text" name="RechercheMot" id="RechercheMot" /> </li>
				</ul>
		</div>
		<div id="menu">
		  <ul id="onglets">
		    <li class="active"><a href="Accueil.html"> Objets déposés </a></li>
		    <li><a href="Forums.html"> Object recherchés </a></li>
		  </ul>
		</div>
	</div>
		

		<div id="Connection">
		<form name="login" method="post" action="validate.php">
			Pseudo :<input type="text" name="user_name"><br>
			Password :<input type="password" name="password"><br>
			<input type="submit" value="Se connecter">
			<a href="CreerCompte.php">Créer un compte
		</form>
		</div>
    </body>
</html>

