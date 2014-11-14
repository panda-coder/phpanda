<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->LoadConfig('test.ini');


class ControllerTest extends \PHPanda\PandaController{
    public function js()
    {
        echo "js";
        echo $this->config->route_param;
    }
    public function css()
    {
        echo "css";
    }
}


$controller = new ControllerTest($config);



?>
