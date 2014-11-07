<?php
require '../../libs/core.php';

#echo "teste";
$config = new \PHPanda\PandaConfig();
#$config->LoadConfig('test.ini');

$controller = new \PHPanda\PandaController($config);
$arrTo = array();
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

?>