<?php
// On démarre la session (obligatoire sur toutes les pages qui doivent avoir accès aux variables de session)
session_start();

// On vérifie l'existance de nos POSTS
if(isset($_POST['fname'], $_POST['name'])){
	// On définie les variables de session avec les valeurs des POSTS
	$_SESSION['fname'] = $_POST['fname'];
	$_SESSION['name'] = $_POST['name'];
	// Facultatif : on définit une variable qui contient nos variables de session
	$session_value = $_SESSION['fname'] . " " . $_SESSION['name'];

	// Modification de la valeur d'un variable
	//$_SESSION['name'] = 'Nouvelle valeur';

	// Suppression de la session
  //session_destroy();

	// Suppression d'une variable de session
	//unset($_SESSION['fname']);

	// Plus d'infos sur les variables de session : http://php.net/manual/fr/reserved.variables.session.php
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
// Si les variables de session n'existent pas, on affiche le formulaire
if(!isset($_SESSION['fname'], $_SESSION['name'])) {
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
// Si les variables de session existent, on affiche les données contenues
else {
    echo 'Hello ' . $session_value;
}
?>
</main>
</body>
</html>
