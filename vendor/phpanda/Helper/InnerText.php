<?php

namespace PHPanda\Helper;

class InnerText implements HelperComponentInterface
{
    protected $value;
    
    function __contruct($arr)
    {
        $this->value = $arr["value"];
    }
    
    public function Show()
    {
        return $this->value;
    }
    
    public function __toString()
    {
        return $this->Show();
    }
}