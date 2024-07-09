<?php

require_once 'bdd.php';

$id = $_GET['id'];

$requete="SELECT * FROM articles WHERE id = $id"; // écriture de la requête
$resultat=$bdd->query($requete); // réalisation de la requête

foreach ($resultat as $info) {
    echo "titre : " . $info['titre'] . "<br><br>";
    echo '<img src="' . $info['image'] . '" alt="Project Image"><br>';
}


?>