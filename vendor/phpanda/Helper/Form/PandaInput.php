<?php

namespace PHPanda\Helper\Form;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;

class PandaInput extends HelperObject
    implements HelperComponentInterface
{
    protected $type;
    
    public function __construct($data)
    {
        $this->addParser('typeInput', function($v){
            $this->type = $v;
        });
        $this->parseArray($data);
    }
    
    public function Show()
    {
        return "<input class=\"form-control\" type=\"{$this->type}\" value=\"{$this->value}\" name=\"{$this->name}\" />";
    }
    
    public function __toString()
    {
        return $this->Show();
    }
}