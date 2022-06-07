<?php

require_once('../connect.php');

// Réaliser une requête permettant de récupérer le titre, l'année de sortie et le réalisateur de chaque film

$req_get_all_infos = "SELECT title, release_years_id, directors FROM infos_movies";
$req_get_all_infos = $db->prepare($req_get_all_infos);
$req_get_all_infos->execute();
$all_infos = $req_get_all_infos->fetchAll(PDO::FETCH_ASSOC);
print_r($all_infos);