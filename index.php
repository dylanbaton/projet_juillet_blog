<?php

require_once 'bdd.php';

// $requete='SELECT * FROM articles'; // écriture de la requête
// $resultat=$bdd->query($requete); // réalisation de la requête


$resultat=$bdd->prepare('SELECT id, titre, image FROM articles');
$resultat->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'accueil">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil - Articles</title>
</head>
<body>
    <nav class="navbar">
        <div class="liste">
            <!-- <a href="category.php">categories</a> -->
            <a href="index.php">accueil</a>
            <a href="admin-articles.php">admin</a>
        </div>  
    </nav>
    <h1>Accueil - Articles</h1>
    <div class="container">
        <?php foreach ($resultat as $info) : ?>
            <div class="card">
                <h2><?= $info['titre'];?></h2>
                <?= '<img src="' . $info['image'] . '" alt="Project Image">';?>
                <h3><?= '<a href="article.php?id=' . $info['id'] . '">en savoir plus</a>';?></h3>
            </div> 
        <?php endforeach; ?>
    </div>
    
    
    <!-- <a href="select-liste.php">admin-liste</a>;
    <a href="formulaire-ajout.php">formulaire-ajout</a>; -->
    
</body>
</html>