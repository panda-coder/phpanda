<?php

namespace PHPanda\Std;



class Messages {
    
    private static $instance;
    
    private $messages;
    
    private function __construct() {
        $this->messages = include BASE_PATH 
        . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR . 'messages.config.php';
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
    
    public function printMessages()
    {
        var_export($this->messages);
    }
    
    public function getMessage($msg)
    {
        return $this->messages[$msg];
    }
}
