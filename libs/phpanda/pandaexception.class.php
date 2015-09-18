<?php
namespace PHPanda
{
    /**
    * Esta classe é a responsável pelo gerenciamento de excessao.
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package PHPanda
    */
    class PandaException extends \Exception
    {
        public function ShowException()
        {
            echo $this->getMessage() . "\n";
        }
    }
}
?>