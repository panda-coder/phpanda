<?php

namespace PHPanda\Helper\Menu;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;


class MenuItemLink extends HelperObject
implements HelperComponentInterface
{
    protected $class_a;

    public function __construct(array $data_menu)
    {
        $this->addParser('class-a', function($v){
            $this->class_a = $v;
        });
        $this->parseArray($data_menu);
    }

    public function Show()
    {
        return "<li id=\"{$this->id_name}\" class=\"{$this->class}\"><a href=\"{$this->href}\">{$this->label}</a></li>";
    }

}