<?php

require_once 'bdd.php';

$requete='SELECT * FROM articles'; // écriture de la requête
$resultat=$bdd->query($requete); // réalisation de la requête

foreach ($resultat as $info) {
    echo "titre : " . $info['titre'] . "<br><br>";
    echo '<img src="' . $info['image'] . '" alt="Project Image"><br>';
}

?>