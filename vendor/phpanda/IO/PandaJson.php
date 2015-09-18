<?php

namespace PHPanda\IO;

use PHPanda\Std\PandaObject;

class PandaJson extends PandaObject
{
    
    /**
     * 
     * @param mixed $data
     */
    public function __construct($data = array())
    {
        if ( is_array($data) ){
            $this->__setData($data);
        }
        if ( is_object($data) ){
            $this->__setData((array) $data);
        }
    }
    
    public function setInput($data)
    {
        $this->__setData($data);
    }
    
    public function __toString()
    {
        return json_encode( $this->__getData() );
    }
}