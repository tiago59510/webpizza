<?php

//Fichier de chargement automatique des script du répertoire private/app/utils

//Test si la constante UTILS_PASS n'est définie.
if (!defined('UTILS_PASS')) {
    define('UTILS_PASS', null);
}

if (UTILS_PASS !=null) {
//Scanner le répertoire UTILS_PASS
$utils_scan = scandir(UTILS_PASS);

//var_dump ($utils_scan);

//Une boucle sur la lise des entrées $utils_scan
foreach($utils_scan as $key => $value) {
    //Filtre les fichiers se termnant par .php
    if (preg_match("/\.php$/", $value))
        //alors on inclus uniquement les fichiers ".php"
    {    include_once UTILS_PASS.$value;
    } 
}
}
