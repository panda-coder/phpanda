<?php
namespace PHPanda
{
    /**
    * Classe para a View
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package PHPanda
    */
    class PandaObject
    {
        public function __call($name, $args)
        {
            throw new PandaException("Function {$name} doens't not exist!",  1);
        }
    }
}
?>