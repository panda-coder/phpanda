<?php
/**
 * Created by PhpStorm.
 * User: pandacoder
 * Date: 01/09/15
 * Time: 22:16
 */

namespace PHPanda\Std;


class SessionManager
{
    private $workspace;
    private static $debugMode = false;
    private static $instances = 0;

    function __construct($workspace)
    {
        $this->workspace = $workspace;

        self::$debugMode = false;
        self::$instances += 1;
    }

    function __destruct()
    {
        if ( self::$instances-- <= 1 && self::$debugMode == true){
            if ( $this->checkStarted() ){
                var_dump($_SESSION);
            }else{
                echo "Session not started";
            }
        }
    }

    public function startSession()
    {
        if ( !$this->checkStarted() ){
            session_start();
        }
    }

    public static function setDebugMode($value)
    {
        self::$debugMode = $value;
    }

    private function checkStarted()
    {
        if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
            if (session_status() != PHP_SESSION_NONE) {
                return true;
            }else{
                return false;
            }
        }else{
            if(session_id() == '') {
                return true;
            }else{
                return false;
            }
        }
    }

    public function set($var, $value)
    {
        $_SESSION[ $this->workspace ][$var] = $value;
    }

    public function get($var)
    {
        return $_SESSION[ $this->workspace ][$var];
    }

    public function clearAllWorkspaces()
    {
        session_destroy();
    }

    public function clear()
    {
        unset($_SESSION[ $this->workspace ]);
    }
}