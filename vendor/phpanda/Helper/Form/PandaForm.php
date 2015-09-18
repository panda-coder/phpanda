<?php 

namespace PHPanda\Helper\Form;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\AbstractHelperSet;

class PandaForm extends AbstractHelperSet 
    implements HelperComponentInterface
{

    protected $method;
    
    protected $action;
    
    public function __construct($data_menu)
    {
        $this->addParser('method',function($v){
            $this->method = $v;
        });
        $this->addParser('action',function($v){
            $this->action = $v;
        });
        if ( is_array($data_menu) ){
            $this->parseArray($data_menu);
        }
    }
    
    public function Show()
    {
        return $this->__toString();
    }
    
    public function __toString()
    {
        return '<form method="' . $this->method . '" action="' 
                . $this->action . '">' . $this->getOutputComponents() . '</form>';
    }
    
}