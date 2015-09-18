<?php

namespace PHPanda\Helper\Form;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;

class PandaInputGroup extends HelperObject
    implements HelperComponentInterface
{
    protected $type;
    protected $value;
    protected $class_group;
    
    public function __construct($data)
    {
        $this->addParser('typeInput', function($v){
            $this->type = $v;
        });
        $this->addParser('value', function($v){
            $this->value = $v;
        });
        $this->addParser('classGroup', function($v){
            $this->class_group = $v;
        });
        $this->parseArray($data);
    }
    
    public function Show()
    {
        return "<div class=\"form-group  {$this->class_group}\">
            <label for=\"{$this->id_name}\">{$this->label}:</label>
              <input class=\"form-control\" type=\"{$this->type}\" value=\"{$this->value}\" name=\"{$this->id_name}\" />
          </div>";
    }
    
    public function __toString()
    {
        return $this->Show();
    }
}