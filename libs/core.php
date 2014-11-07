<?php
namespace PHPanda{
    define('PATH_ROOT', dirname(dirname( __FILE__ )) );
    define('PATH_CONFIG', dirname( __FILE__) );
    define('PATH_LIBS', dirname( __FILE__) );
    define('PATH_THIRD', PATH_ROOT . DIRECTORY_SEPARATOR . 'thirds' );
    define('THIRD_LIBS', PATH_ROOT . DIRECTORY_SEPARATOR . 'thirds' . DIRECTORY_SEPARATOR . 'lib');
    /**
    * Carrega uma classe do PHPanda
    * @version 0.1
    * @access public
    * @package PHPanda
    *
    * @param string $class Classe que ira carregar
    */
    function loadPHPanda($class){
        $class = strtolower($class);
        require_once 'phpanda' . DIRECTORY_SEPARATOR . "{$class}.class.php";
    }
    /**
    * Carrega uma classe do DBTools
    * @version 0.1
    * @access public
    * @package PHPanda
    *
    * @param string $class Classe que ira carregar
    */
    function loadDBTools($class){
        $class = strtolower($class);
        require_once PATH_CONFIG . DIRECTORY_SEPARATOR . 'dbtools' .
        DIRECTORY_SEPARATOR . "{$class}.class.php";
    }
    /**
    * Esta classe e a responsavel por set de configuracoes.
    * @version 0.1
    * @access public
    * @package PHPanda
    *
    * @param string $file Carrega arquivo de terceiros na pasta "thirds" (tem que incluir a subpasta
    * Ex: "PHPMailer/PHPMailerAutoload" )
    */
    function loadThird($file){
        require_once THIRD_LIBS . DIRECTORY_SEPARATOR . "{$file}.php";
    }
    loadPHPanda("PandaException"); //Carrega a classe PandaException
    \PHPanda\loadPHPanda("PandaObject");
    \PHPanda\loadPHPanda("PandaConfig");
    \PHPanda\loadPHPanda("PandaController");
    \PHPanda\loadPHPanda("PandaModel");
    \PHPanda\loadPHPanda("PandaView");
}
?>