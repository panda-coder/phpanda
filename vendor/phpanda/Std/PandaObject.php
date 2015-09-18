<?php

namespace PHPanda\Std;

use PHPanda\Exception\PandaException;
    
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
    
    private $data = array();
    
    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }
    public function getData($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : '';
    }
    public function __get($key)
    {
        return $this->getData($key);
    }
    public function __set($key, $value)
    {
        $this->setData($key, $value);
    }
    
    final protected function __getData()
    {
        return $this->data;
    }
    
    final protected function __setData($data)
    {
        $this->data = $data;
    }
}

