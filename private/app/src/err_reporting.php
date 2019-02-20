<?php

//Fichier de definition du comportement des erreurs php


//Dans le cas ou la variable $env n'est pas défini 
//On initialise la variable $env avec la valeur prod

if (!isset($env)){
    $env = prod;
}

//Dans le cas ou la variable $env est défini à une autre valeur que "dev"
//On demande à php d'ignorer toutes les erreurs.






?>