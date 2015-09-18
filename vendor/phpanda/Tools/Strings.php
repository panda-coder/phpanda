<?php
/**
 * Created by PhpStorm.
 * User: pandacoder
 * Date: 13/08/15
 * Time: 22:06
 */

namespace PHPanda\Tools;


class Strings
{
    private static $instance;


    private function __construct() {
        //Don't allow instances (private
    }

    public function snakeToCamel($str)
    {
        $aux = explode("_", $str);
        $aux = array_map('ucfirst', $aux);
        return implode('', $aux);
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

}