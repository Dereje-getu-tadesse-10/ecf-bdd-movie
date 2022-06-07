<?php
require_once('../connect.php');
// Réaliser une requête qui permet de récupérer toutes les catégories

$req_get_categories = "SELECT * FROM categories";
$req_get_categories = $db->prepare($req_get_categories);
$req_get_categories->execute();
$categories = $req_get_categories->fetchAll(PDO::FETCH_ASSOC);
// print_r($categories);

// Réaliser une requête qui permet d'afficher le nombre de films par catégories

$req_get_nb_movies_by_category = "SELECT categories.category AS category, COUNT(infos_movies.id) AS nb_movies FROM infos_movies
INNER JOIN categories ON infos_movies.categories_id = categories.id
GROUP BY categories.category";
$req_get_nb_movies_by_category = $db->prepare($req_get_nb_movies_by_category);
$req_get_nb_movies_by_category->execute();
$nb_movies_by_category = $req_get_nb_movies_by_category->fetchAll(PDO::FETCH_ASSOC);
// print_r($nb_movies_by_category);