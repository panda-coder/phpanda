<?php

namespace PHPanda\Helper\Menu;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\AbstractHelperSet;
use PHPanda\Helper\Menu\MenuItem;


class MenuList extends AbstractHelperSet 
    implements HelperComponentInterface
{    
    public function __construct($data_menu)
    {
        if ( is_array($data_menu) ){
            $this->parseArray($data_menu);
        }
    }
    
    public function Show()
    {
        return "<ul class=\"{$this->class}\">" . $this->getOutputComponents() . "</ul>";
    }
    
}