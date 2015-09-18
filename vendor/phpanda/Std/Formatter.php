<?php

namespace PHPanda\Std;



class Formatter {
    
    private static $instance;
    
    private $formatters;
    
    private function __construct() {
        $this->formatters = include BASE_PATH 
        . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR . 'formatter.config.php';
    }

    
    public function __clone() {
        throw new PandaException("Clone is not allowd");
    }
    public function __wakeup() {
        throw new PandaException("Deserializing is not allowd");
    }
    //This method must be static, and must return an instance of the object if the object
    //does not already exist.
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    public function printFormatters()
    {
        var_export($this->formatters);
    }
    
    public function format($value, $type)
    {
        return $this->formatters[$type]($value);
    }
}
