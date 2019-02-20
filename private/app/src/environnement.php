<?php

//Fichier de definition de l'environnement d'execution de l'application

    


if( !empty($_SERVER['SERVER_NAME'])
&& 
in_array($_SERVER['SERVER_NAME'], $dev_domains)
){
    $env = 'dev';
}




 




