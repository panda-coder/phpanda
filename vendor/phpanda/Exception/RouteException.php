<?php

namespace PHPanda\Exception;

use \Exception;

/**
* Esta classe é a responsável pelo gerenciamento de excessao.
* @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
* @version 0.1
* @access public
* @package PHPanda
*/
class RouteException extends Exception
{
    public function ShowException()
    {
        header('content-type text/html charset=utf 8');
        echo $this->getMessage() . "\n";
    }
}
