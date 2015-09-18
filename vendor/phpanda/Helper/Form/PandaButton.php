<?php

namespace PHPanda\Helper\Form;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;

class PandaButton extends HelperObject
    implements HelperComponentInterface
{
    
    public function __construct($data)
    {
        $this->parseArray($data);
    }
    
    public function Show()
    {
        return "<button class=\"{$this->class}\">{$this->label}</button>";
    }
    
    public function __toString()
    {
        return $this->Show();
    }
}