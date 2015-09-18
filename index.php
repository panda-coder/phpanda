<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $skipUrlH = False;
    if ( isset($_GET["app"])){
        if ( ($_GET["app"] == "res") || ($_GET["app"] == "res_third") ){
            $skipUrlH = True;
        }
    }
    if ( ! $skipUrlH ){
        require 'urlHandler.php';
        include $app;
    }else{
        
        include 'libs' . DIRECTORY_SEPARATOR . 'phpanda' .
        DIRECTORY_SEPARATOR . 'pandaresources.class.php';
    }
?>
