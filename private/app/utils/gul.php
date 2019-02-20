<?php

//Determine les langues de l'utilisateur
if (!function_exists('gul')) {
function gul() {
   $languages_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
   $languages_arr = explode(",",$languages_str);

    foreach($languages_arr as $key => $value){
        echo $value."<br>";

    }
}}



    //$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //$acceptLang = ['fr', 'it', 'en']; 
    //$lang = in_array($lang, $acceptLang) ? $lang : 'en';
    //require_once "index_{$lang}.php"; 

?>