<?php

namespace PHPanda\Helper;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\AbstractHelperSet;
use PHPanda\Helper;


class GenericHelperObject extends AbstractHelperSet 
    implements HelperComponentInterface
{
    protected $tag;
    
    public function __construct($data)
    {
        $this->addParser('tag', function($v){
            $this->tag = $v;
        });
        if ( is_array($data) ){
            $this->parseArray($data);
        }
    }
    
    public function Show()
    {
        if ( $this->countComponents() > 0 ){
            return "<{$this->tag} class=\"{$this->class}\">" . $this->getOutputComponents() . "</{$this->tag}>";
        }else{
            return "<{$this->tag} class=\"{$this->class}\" />";
        }
        
    }
    
}