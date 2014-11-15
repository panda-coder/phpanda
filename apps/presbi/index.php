<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->LoadConfig('test.ini');


class ControllerTest extends \PHPanda\PandaController{
    public function index()
    {
         //echo 'Hello World!';
        $this->view->LoadTemplate('page_p');
        $this->view->title = 'Modelo Presbi';
        $this->view->addCSS('../res/css_third/bootstrap.min.css');
        
        $button = "{%BUTTON_PRIMARY|teste|Clique aqui|index.html%}";
        $this->view->setBody( $button . $button . $button );
        $this->view->ShowDefault();
        
        $this->logEvent('Pepa acessou o site','no-user' );
    }
    public function presbi()
    {
        echo "Voce entrou na presbi xD";
    }
    
}


$controller = new ControllerTest($config);



?>