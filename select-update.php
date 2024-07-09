<?php

require_once 'bdd.php';

$id = $_GET["id"];

$requete="SELECT * FROM articles WHERE id=$id";
$infos=$bdd->query($requete);
$resultat=$infos->fetch(PDO::FETCH_ASSOC);
?>


<form action="traitement-update.php" method="GET">

    Titre
    <input type="text" name="titre" value="<?php echo $resultat["titre"];?>">

    Image
    <input type="text" name="image" value="<?php echo $resultat["image"];?>">

    
    <input type="hidden" name="id" value="<?php echo $id;?>">

    <input type="submit" value="envoyer">

</form>