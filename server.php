<?php 


//Debug du server
// var_dump($_SERVER);

//https://grafikart.fr/tutoriels/serveur-web-interne-778 Raccourcis de création serve

//Toujour penser aux variable __DIR__ pour relier un chemain pour éviter des problème.

//Récupérer le PATCH de l'url
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// Si l'url ce n'est pas la racine et si le fichier existe dans /public on le renvoie la page
if ($url != '/' && file_exists(__DIR__ . '/public' . $url)) {
    return false;
}

// $_SERVER['SCRIPT_NAME'] = '/index.php';

//Sinon redirextion sur la page index.php
require_once __DIR__ . '/public/index.php';
?>