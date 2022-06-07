<?php

require_once('../connect.php');

// Réaliser une requête qui permet de récupérer tous les films d'avant 2002

$req_get_old_movies = "SELECT * FROM release_years  WHERE release_year < 2002";
$req_get_old_movies = $db->prepare($req_get_old_movies);
$req_get_old_movies->execute();
$old_movies = $req_get_old_movies->fetchAll(PDO::FETCH_ASSOC);
print_r($old_movies);