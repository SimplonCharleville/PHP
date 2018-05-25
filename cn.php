<?php
$host="localhost";
$user="root";
$password="";
$dbname="exo-250518";
$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
  echo "Erreur: " . mysqli_connect_error();
	exit();
}

//echo 'Connected to MySQL';

//INSERT
//$sql = "INSERT INTO participants (id, titre, nom, prenom, email, remember) VALUES (null, 'Monsieur', 'Tester', 'Test', 'test@test.com', 1, CURRENT_TIMESTAMP)";
//$sql = "INSERT INTO participants (titre, nom, prenom, email, remember, date_creation) VALUES ('Monsieur', 'Tester', 'Test', 'test@test.com', 1, now())";

//UPDATE
$sql = "UPDATE participants SET nom='Testeur' WHERE email='test@test.com'";

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
