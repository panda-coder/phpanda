<?php

namespace PHPanda\Helper\Form;

use PHPanda\Helper\HelperComponentInterface;
use PHPanda\Helper\HelperObject;

class TextAreaGroup extends HelperObject
    implements HelperComponentInterface
{
    protected $value;
    protected $class_group;
    protected $cols;
    protected $rows;
    
    public function __construct($data)
    {
        $this->addParser('value', function($v){
            $this->value = $v;
        });
        $this->addParser('classGroup', function($v){
            $this->class_group = $v;
        });
        $this->addParser('cols', function($v){
            $this->cols = $v;
        });
        $this->addParser('rows', function($v){
            $this->rows = $v;
        });
        $this->parseArray($data);
    }
    
    public function Show()
    {
        return "<div class=\"form-group  {$this->class_group}\">
            <label for=\"{$this->id_name}\">{$this->label}:</label>
              <textarea class=\"form-control\" name=\"{$this->id_name}\">
              {$this->value}
              </textarea>
          </div>";
    }
    
    public function __toString()
    {
        return $this->Show();
    }
}