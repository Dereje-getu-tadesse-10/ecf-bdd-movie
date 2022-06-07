<?php

require_once('../connect.php');

// Réaliser une requête affichant le nombre d'années entre le film le plus récent et le film le plus vieux

$req_get_years = "SELECT release_years_id AS year FROM infos_movies ORDER BY release_years_id DESC ";
$req_get_years = $db->prepare($req_get_years);
$req_get_years->execute();
$years = $req_get_years->fetchAll(PDO::FETCH_ASSOC);

print_r($years);
