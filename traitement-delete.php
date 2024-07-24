<?php

require_once 'bdd.php';

$id = $_GET["id"];

$query = "DELETE FROM articles WHERE id = $id";

$execution=$bdd->exec($query);

header("location: admin-articles.php");
?>