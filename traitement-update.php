<?php

require_once 'bdd.php'; 

$titre = $_GET['titre'];
$image = $_GET['image'];
$id = $_GET['id'];

$requete = "UPDATE articles SET titre ='$titre', image='$image' WHERE id = $id";

$bdd->exec($requete);

?>