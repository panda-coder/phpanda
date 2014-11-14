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
        
        $this->logEvent('Pepa acessou o site','no-user' );
    }
    public function logout()
    {
        $this->logEvent('Deslogou','pepa' );
        $this->redirect('/phpanda/apptest/login/');
    }
    public function testModel()
    {
        $teste = new PHPanda\PandaModelDB();
        $teste->AddField("Nome", "char", "Blank", 40);
        $teste->AddField("Idade", "int", "15", 2);
        $teste->AddField("facebook", "int", "15", 2);
        $teste->AddField("telefone", "int", "15", 2);
        $teste->AddField("email", "int", "15", 2);
        
        echo $teste->InsertSQL();
    }
}


$controller = new ControllerTest($config);



?>
