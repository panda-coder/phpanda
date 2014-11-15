<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->LoadConfig('test.ini');


class ControllerTest extends \PHPanda\PandaController{
    public function js()
    {
        echo $this->config->route_param;
    }
    public function css()
    {
        echo "css";
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
}


$controller = new ControllerTest($config);



?>
