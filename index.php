<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if ( $_GET["app"] != "res"){
        require 'urlHandler.php';
        include $app;
    }else{
        include 'libs' . DIRECTORY_SEPARATOR . 'phpanda' .
        DIRECTORY_SEPARATOR . 'pandaresources.class.php';
    }
?>
