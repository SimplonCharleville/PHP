<?php
$host="localhost";
$user="root";
$password="";
$dbname="exo-250518";
$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
  echo "Erreur : " . mysqli_connect_error();
	exit();
}

//echo 'Connected to MySQL';

//INSERT
//$sql = "INSERT INTO participants (titre, nom, prenom, email, remember, date_creation) VALUES ('Monsieur', 'Tester', 'Test', 'test@test.com', 1, CURRENT_TIMESTAMP)";
//$sql = "INSERT INTO participants (titre, nom, prenom, email, remember, date_creation) VALUES ('Monsieur', 'Tester', 'Test', 'test@test.com', 1, now())";

//UPDATE
//$sql = "UPDATE participants SET nom='Testeur' WHERE email='test@test.com'";
$sql = "SELECT * from participants where email='$email'";
$result = mysqli_query($con, $sql);

$email="test@test.com";
$nom="Testeur3";
$prenom="Test3";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    //echo "Nom : " . $row["nom"]. "<br>";
    $sql = "UPDATE participants SET nom='$nom', prenom='$prenom' WHERE email='$email'";
  }
} else {
    echo "0 results";
}

if (mysqli_query($con, $sql)) {
    //INSERT
    //echo "Les données ont été insérées";
    //UPDATE
    echo "Les données ont été modifiées";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
