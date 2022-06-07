<?php
require_once('connect.php');
// Réaliser une requête qui permet de récupérer tous les titres des films

// get title name from info movies
$req_get_title_movies = "SELECT title FROM infos_movies";
$req_get_title_movies = $db->prepare($req_get_title_movies);
$req_get_title_movies->execute();
$title_movies = $req_get_title_movies->fetchAll(PDO::FETCH_ASSOC);

echo "Les titre : $title_movies";