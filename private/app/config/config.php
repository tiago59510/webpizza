<?php

//Fichier de configuration

//1. Definition des constantes

//Definir le chemain du répertoire "utils"
define('UTILS_PASS', '../private/app/utils/');

//WEBSITE_TITLE : Definition du titre du site
define('WEBSITE_TITLE', 'Web-Pizza');

//2. Definition des variables d'environnement d'exécution

//PROD ou DEV ?
//prod
$env = "prod";
//dev
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];

?>