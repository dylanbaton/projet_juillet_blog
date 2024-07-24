<?php

require_once 'bdd.php'; 

$titre = $_GET['titre'];
$image = $_GET['image'];
$description = $_GET['description'];
$id = $_GET['id'];

$requete = $bdd->prepare("UPDATE articles SET titre = :titre, image= :image, description= :description WHERE id = :id");
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':image', $image, PDO::PARAM_STR);
$requete->bindValue(':description', $description, PDO::PARAM_STR);
$requete->bindValue(':id', $id, PDO::PARAM_STR);
$requete->execute();

header("location: admin-articles.php");

