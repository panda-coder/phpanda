<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->mail_smtp_server = "127.0.0.1";

class PandaResources extends \PHPanda\PandaController{
    public function js()
    {
        if ( $this->config->app == "res_third" ){
            $this->js_third();
        }
    }
    public function css()
    {
        if ( $this->config->app == "res_third" ){
            $this->css_third();
        }
    }
    public function fonts()
    {
        if ( $this->config->app == "res_third" ){
            $this->fonts_third();
        }
    }
    public function js_third()
    {
        $dir = PATH_THIRD . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR;
        echo file_get_contents( $dir .  $this->config->route_param );
    }
    public function css_third()
    {
        header("Content-Type: text/css");
        $dir = PATH_THIRD . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR;
        echo file_get_contents( $dir .  $this->config->route_param );
    }
    
    public function fonts_third()
    {
        $dir = PATH_THIRD . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR;
        echo file_get_contents( $dir .  $this->config->route_param );
    }
}
$controller = new PandaResources($config);



?>

