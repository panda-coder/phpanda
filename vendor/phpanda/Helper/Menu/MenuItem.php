<?php

namespace PHPanda\Helper\Menu;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;


class MenuItem extends HelperObject
    implements HelperComponentInterface
{
    
    public function __construct(array $data_menu)
    {
        $this->parseArray($data_menu);
    }
    
    public function Show()
    {
        return "<li id=\"{$this->id_name}\" class=\"{$this->class}\">{$this->label}</li>";
    }
    
}