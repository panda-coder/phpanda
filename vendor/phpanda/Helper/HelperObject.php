<?php 

namespace PHPanda\Helper;

use PHPanda\Helper\HelperComponentInterface;

class HelperObject
{
    protected $id_name;
    protected $class;
    protected $href;
    protected $label;
    protected $value;
    protected $parser = array();
    
    public function setClass($class)
    {
        $this->class = $class;
    }
    
    public function setIdName($name)
    {
        $this->id_name = $name;
    }
    
    public function setHref($href)
    {
        $this->href = $href;
    }
    
    public function setLabel($label)
    {
        $this->label = $label;
    }
    
    public function addParser($idx, $callback)
    {
        $this->parser[$idx] = $callback;
    }
    
    public function parseArray($arr)
    {
        foreach($arr as $idx => $item){
            switch ($idx){
                case "name":
                    $this->setIdName($item);
                    break;
                case "label":
                    $this->setLabel($item);
                    break;
                case "href":
                    $this->setHref($item);
                    break;
                case "class":
                    $this->setClass($item);
                    break;
                case 'type':
                    break;
                default:
                    $this->parser[$idx]($item);
                    break;
            }
        }
    }
    
    public function __toString()
    {
        return $this->Show();
    }
    
}