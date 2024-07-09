<?php

require_once 'bdd.php';

$requete='SELECT * FROM articles'; // écriture de la requête
$resultat=$bdd->query($requete); // réalisation de la requête

foreach ($resultat as $info) {
    echo "titre : " . $info['titre'] . "<br><br>";
    echo '<img src="' . $info['image'] . '" alt="Project Image"><br>';
    echo '<a href="select-detail.php?id=' . $info['id'] . '">en savoir plus</a>';
}
?>


<a href="select-liste.php">admin-liste</a>;
<a href="select-ajout.php">formulaire-ajout</a>;
<a href="formulaire-update.php">formulaire-modifier</a>;