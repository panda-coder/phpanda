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
        $teste->AddField("ID", "int", "1", 10, true);
        $teste->AddField("Nome", "char", "Blank", 40);
        $teste->AddField("Idade", "int", "15", 2);
        $teste->AddField("facebook", "int", "15", 2);
        $teste->AddField("telefone", "int", "15", 2);
        $teste->AddField("email", "email", "fireball.vb@gmail.com", 2);
        
        echo $teste->getJSON();
    }
    public function testLoad()
    {
        $teste = new PHPanda\PandaModelDB();
        $teste->setTableName("T_USUARIO");
        $teste->AddField("ID", "int", '', 10, true);
        $teste->AddField("Nome", "char", '', 40);
        $teste->AddField("Idade", "int", '', 2);
        $teste->AddField("facebook", "int", '', 2);
        $teste->AddField("telefone", "int", '', 2);
        $teste->AddField("email", "email", '', 2);
        
        echo $teste->getJSON();
        
        $teste->loadJSON('{"ID":"1","Nome":"Blank","Idade":"15","facebook":"15","telefone":"15","email":"fireball.vb@gmail.com"}');
        echo "<pre>";
        echo $teste->getXML();
        echo $teste->createTableSQL();
        echo "</pre>";
        
    }
}


$controller = new ControllerTest($config);



?>
