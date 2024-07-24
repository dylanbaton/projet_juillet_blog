<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'ajout d'articles">
    <link rel="stylesheet" href="css/navbar.css">
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
    <form action="insertion.php" method="GET">
        Titre
        <input type="text" name="titre">

        Image
        <input type="text" name="image">

        <input type="submit" value="envoyer">
    </form>
</body>
</html>

