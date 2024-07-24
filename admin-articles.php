<?php

require_once 'bdd.php';

$requete='SELECT * FROM articles'; // écriture de la requête
$resultat=$bdd->query($requete); // réalisation de la requête
$articles = $resultat->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($articles);
// echo '<pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page admin d'articles">
    <link rel="stylesheet" href="css/style.css">
    <title>Administrations des articles</title>
</head>
<body>
    <nav class="navbar">
        <div class="liste">
            <a href="index.php">accueil</a>
            <a href="admin-ajout.php">ajouter un article</a>
            <a href="admin-articles.php">admin</a>
        </div>  
    </nav>
    <h1>Administrations des articles</h1>
    <div class="container">
        <?php foreach ($articles as $article) : ?>
            <div class="card">
                <h1><?= $article['id'];?></h1>
                <h2><?= $article['titre'];?></h2>
                <a href="admin-modification.php?id=<?= $article['id'];?> ">formulaire-modifier</a>
                <a href="traitement-delete.php?id=<?= $article['id'];?>">supprimer</a>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>