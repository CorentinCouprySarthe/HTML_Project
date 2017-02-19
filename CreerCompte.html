<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Création de compte</title>

    </head>
    <body>
			<h1> Création du compte </h1>
			
			<form name="nouveaumembre" method="post" action="newcount.php">
			Nom d'utilisateur:<input type="text" name="user_name"><br>
			Mot de passe:<input type="password" name="password"><br>
			<input type="submit" value="Envoyer">
			</form>
    

    </body>

</html>
<?php

//Petite fonction permetant de ne pas executer de fonctions php, js,... lors de l'enregistrement. 

function format_value($value) { 
$value = mysql_escape_string($value); 
return "'$value'"; 
} 

//Vérification des champs (remplis ou non) 

if (!$_REQUEST["user_name"] || !$_REQUEST["password"]) { echo "Tous les champs n'ont pas été remplis."; } 
else { 
$username = format_value($_REQUEST["user_name"]); 
$password = format_value($_REQUEST["password"]); 

//Connexion à la base de donnée. 
$host = ''; 
$name = ''; 
$user = ''; 
$pwd = ''; 
$db = mysql_pconnect($host, $user, $pwd); 
mysql_select_db($name); 

//A la limite, rend le mot de pass "crypté" avec le sha1 par exemple 

$password=sha1($password); 

//Ajout 
$query = "INSERT INTO users(user,password) Values($username,$password)"; 
$res = mysql_query($query, $db); 

echo 'Ajout effectué.'; 

} 
?>