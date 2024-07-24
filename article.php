<?php

require_once 'bdd.php';

$id = $_GET['id'];

$requete="SELECT * FROM articles WHERE id = $id"; // écriture de la requête
$resultat= $bdd->query($requete); // réalisation de la requête
$article = $resultat->fetch(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page-d'articles">
    <link rel="stylesheet" href="css/style-article.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Article - <?= $article['titre'];?></title>
</head>
<body>

    <nav class="navbar">
        <div class="liste">
            <a href="index.php">accueil</a>
            <a href="admin-ajout.php">ajouter un article</a>
            <a href="admin-articles.php">admin</a>
        </div>  
    </nav>
    
    <div class="container">
        <h1>Article - <?= $article['titre'];?></h1>
        <p><?= $article['description'];?></p>
        <?= '<img src="' . $article['image_article'] . '" alt="Project Image"><br>';?>
    </div>

</body>
</html>