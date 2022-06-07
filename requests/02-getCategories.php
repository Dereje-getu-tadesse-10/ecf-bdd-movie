<?php
require_once('../connect.php');
// Réaliser une requête qui permet de récupérer toutes les catégories

// get all categories from category
$req_get_categories = "SELECT * FROM categories";
$req_get_categories = $db->prepare($req_get_categories);
$req_get_categories->execute();
$categories = $req_get_categories->fetchAll(PDO::FETCH_ASSOC);
print_r($categories);

// Réaliser une requête qui permet d'afficher le nombre de films par catégories