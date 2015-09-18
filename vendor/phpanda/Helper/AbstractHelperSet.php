<?php 

namespace PHPanda\Helper;

use PHPanda\Helper\HelperComponentInterface;

abstract class AbstractHelperSet extends HelperObject
{
    
    private $components = array();
    
    public function setChilds(array $components)
    {
        foreach ($components as $idx => $obj)
        {
            $classStr = __NAMESPACE__ . '\\' . $obj['type'];
            $this->addComponent(new $classStr($obj));
        }
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
                case "childs":
                    $this->setChilds($item);
                    break;
                case 'type':
                    break;
                default:
                    $this->parser[$idx]($item);
                    break;
            }
        }
    }
   
    
    public function __construct()
    {
        //TODO
    }
    
    public function addComponent(HelperComponentInterface $component)
    {
        $this->components[] = $component;
    }
    
    protected function countComponents()
    {
        return count($this->components);
    }
    
    protected function getOutputComponents()
    {
        $aux = "";
        foreach($this->components as $component){
            $aux .= $component->Show();
        }
        return $aux;
    }
    
}