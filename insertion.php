<?php

require_once 'bdd.php';

$titre= $_GET["titre"];
$image= $_GET["image"];

$query="INSERT INTO articles(titre, image ) VALUES('$titre','$image')";

$execution=$bdd->exec($query);
?>