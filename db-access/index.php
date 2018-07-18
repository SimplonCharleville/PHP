<?php
  // Déclaration des varibles de connexion
  $host_name = 'localhost'; // Localhost
  $database = 'vod'; // Nom de la base de données
  $user_name = 'root'; // Nom d'utilisateur
  $password = ''; // Mot de passe

  // Connexion à la DB
  $dbh = null;
  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    echo "<p>Connexion au serveur MySQL établie avec succès via pdo.</p >";
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }

  // Requête SQL qui va retourner toutes les entrées de la table "films"
  $reponse = $dbh->prepare('SELECT * FROM films');
  // Execution de la requête
  $reponse->execute();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Films</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
  <?php
  // On affiche chaque entrée une à une
  while ($row = $reponse->fetch(PDO::FETCH_ASSOC))
  {
  ?>
    <div>
      <h1>Titre : <?php echo $row['Titre']; ?></h1>
      Date de sortie : <?php echo date("d/m/Y", strtotime($row['Date_sortie'])); ?><br /> <!-- Modifie le format de la date EN vers FR -->
      <img src="img/<?php echo $row['Image']; ?>" class="resize" />
    </div>
  <?php
  }
  $reponse->closeCursor(); // Termine le traitement de la requête
  ?>
  </main>
</body>
</html>
