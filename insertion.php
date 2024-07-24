<?php

require_once 'bdd.php';

$titre= $_GET["titre"];
$image= $_GET["image"];

// $query="INSERT INTO articles(titre, image,) VALUES('$titre','$image')";

// $execution=$bdd->exec($query);
$requete = $bdd->prepare("INSERT INTO articles(titre, image) VALUES titre = :titre, image= :image");
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':image', $image, PDO::PARAM_STR);
$requete->execute();

header("location: index.php");