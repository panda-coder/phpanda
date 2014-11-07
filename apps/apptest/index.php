<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->LoadConfig('test.ini');


class ControllerTest extends \PHPanda\PandaController{
    public function login()
    {
        //echo 'Hello World!';
        $this->view->title = 'Testando para mostrar para o pepa';
        $button = "{%BUTTON_PRIMARY|teste|Clique aqui|index.html%}";
        $this->view->setBody( $button . $button . $button );
        $this->view->ShowDefault();
    }
    public function logout()
    {
        $this->redirect('/phpanda/apptest/login/');
    }
}


$controller = new ControllerTest($config);
/*$arrTo = array();
$arrTo = array(0 => array("name" => "Ercy Moreira Neto",
			  "mail" => 'fireball.vb@gmail.com')
	      );
$view = new \PHPanda\PandaView();
$view->addJS("test.js");
$view->addJS("hello.js");
$view->addCSS("hello.css");
$view->setBody("{%BUTTON_PRIMARY|teste|Clique aqui|index.html%}");
$view->ShowDefault();
//$controller->EnviaEmail("Legal", "Texto", "texto curto",  $arrTo );
//$controller->redirectDefault();
*/

$controller->HandlerRouter();

?>
