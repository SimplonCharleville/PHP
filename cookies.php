<?php
// On vérifie l'existance de nos POSTS
if(isset($_POST['fname'], $_POST['name'])){
	// On définie une variable qui contient les valeurs des POSTS
	$cookie_value=$_POST['fname'] . " " . $_POST['name'];
	// On écrit le cookie qui contient les données de la variable
	setcookie('user', $cookie_value, time() + 365*24*3600, null, null, false, true);
	// Plus d'infos sur les paramètres de setcookie() : http://php.net/manual/fr/function.setcookie.php

	// Suppression du cookie (on défini une date d'expiration passée)
	//setcookie('user', '', time() - 3600, '/');

	// Suppression de la valeur du cookie en mémoire dans $_COOKIE
	//unset($_COOKIE['user']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Cookies</title>
</head>

<body>
<main>
<?php
// Si le cookie n'existe pas, on affiche le formulaire
if(!isset($_COOKIE['user'])) {
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="dataForm" id="dataForm">
    <fieldset>
        <legend>Your subscription</legend>
        <label for="fname">First name*: </label><input type="text" id="fname" name="fname">
        <label for="name">Name*: </label><input type="text" id="name" name="name">
    </fieldset>
    <input type="submit" value="Subscribe">
</form>
<?php
}
// Si le cookie existe, on affiche les données contenues dans le cookie
else {
    echo 'Hello ' . $_COOKIE['user'];
}
?>
</main>
</body>
</html>
