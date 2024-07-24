<?php

require_once 'bdd.php';

$titre= $_GET["titre"];
$image= $_GET["image"];
$description= $_GET["description"];
$image_article= $_GET["image_article"];



// $query="INSERT INTO articles(titre, image,) VALUES('$titre','$image')";

$requete = $bdd->prepare("INSERT INTO articles(titre, image, description, image_article) 
VALUES (:titre, :image, :description, :image_article)");
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':image', $image, PDO::PARAM_STR);
$requete->bindValue(':description', $description, PDO::PARAM_STR);
$requete->bindValue(':image_article', $image_article, PDO::PARAM_STR);
$requete->execute();

header("location: index.php");