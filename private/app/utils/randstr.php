<?php

if(!function_exists('randstring')) {
    function RandomString($length=10, $upper=false, $number=false)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < $length; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    return $randstring;

}
};

?>