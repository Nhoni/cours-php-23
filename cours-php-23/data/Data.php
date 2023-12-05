<?php 
//Fetching des données

$data = file_get_contents(__DIR__.'/data.json'); // Fetch du fichier JSON
$data = json_decode($data, true); // Convertion du JSON en tableau associatif

$users = $data['users']; // Assignation des données "users"
$posts = $data['posts']; // Assignation des données "posts"

print(__DIR__.'/data.json');