<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'ajout d'articles">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/liste.css">
    <title>page d'ajout d'article</title>
</head>
<body>

    <nav class="navbar">
        <div class="liste">
            <a href="index.php">accueil</a>
            <a href="admin-ajout.php">ajouter un article</a>
            <a href="admin-articles.php">admin</a>
        </div>  
    </nav>

    <h1>ajout d'un article</h1>
    <div class="container">
        <form action="insertion.php" method="GET">
            Titre
            <input type="text" name="titre">

            Image
            <input type="text" name="image">

            description
            <input type="text" name="description">

            image d'article
            <input type="text" name="image_article">

            <input type="submit" value="envoyer">
        </form>
    </div>
</body>
</html>

