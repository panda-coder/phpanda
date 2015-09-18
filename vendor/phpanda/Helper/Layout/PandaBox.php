<?php 

namespace PHPanda\Helper\Layout;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\AbstractHelperSet;

class PandaBox extends AbstractHelperSet 
    implements HelperComponentInterface
{ 
    protected $type_box;
    
    public function __construct($data_menu)
    {
        $this->addParser('type_box',function($v){
            $this->type_box = $v;
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
        return "<div class=\"box box-{$this->type_box} box-solid\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">{$this->label}</h3>
            </div>
            <div class=\"box-body\">
            	" .  $this->getOutputComponents() . "
            </div>
        </div>";
    }
    
}