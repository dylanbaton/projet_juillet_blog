<?php

require_once 'bdd.php';

$id = $_GET["id"];

// Meilleur pratique
$requete = "SELECT * FROM articles WHERE id=$id";
$resultat = $bdd->query($requete);
$article = $resultat->fetch(PDO::FETCH_ASSOC); // quand tu recupere un article

// echo '<pre>';
// print_r($article);
// echo '<pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page de modification">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/liste.css">
    <title>Page de modification de l'aticle : <?php echo $article["titre"];?> </title>
</head>
<body>

    <nav class="navbar">
        <div class="liste">
            <a href="index.php">accueil</a>
            <a href="admin-ajout.php">ajouter un article</a>
            <a href="admin-articles.php">admin</a>
        </div>  
    </nav>

<h1>Page de modification de l'article : <?php echo $article["titre"];?> </h1>
<div class="container">
    <form action="traitement-update.php" method="GET">

        Titre
        <input type="text" name="titre" value="<?php echo $article["titre"];?>">

        Image
        <input type="text" name="image" value="<?php echo $article["image"];?>">

        Description
        <input type="text" name="description" value="<?php echo $article["description"];?>">

        image d'article
        <input type="text" name="image_article" value="<?php echo $article["image_article"];?>">
        
        <input type="hidden" name="id" value="<?php echo $id;?>">

        <input type="submit" value="envoyer">


    </form>
</div>
</body>
</html>
