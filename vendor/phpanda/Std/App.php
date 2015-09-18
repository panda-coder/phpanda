<?php

namespace PHPanda\Std;

use PHPanda\Exception\RouteException;
use PHPanda\Std\Loader;
use PHPanda\Std\PandaConfig;

final class App{
    
    /**
     * 
     * @var PHPanda\Std\PandaConfig
     */
    private static $config;

    private static $services;


    public static function setService($name, $starting)
    {
        self::$services[$name] = array(
            'instance' => null,
            'start' => $starting
        );
    }

    public static function getService($name)
    {
        if ( isset(self::$services[$name]) ){
            if ( !is_null(self::$services[$name]['instance']) ){
                return self::$services[$name]['instance'];
            }else{
                $start = self::$services[$name]['start'];
                self::$services[$name]['instance'] = $start();
                return self::$services[$name]['instance'];
            }
        }
    }
    
    public static function Run()
    {
        self::$config = new PandaConfig();
        self::startSettings();
        self::registerNamespace();
        
        self::$config->app_path = self::getAppPath();
        
        self::loadAppConfig();
        $file = self::getAppFilePath();
        
        if ( file_exists($file) ){
            include $file;
        }
    }
    
    public static function handlerRoute()
    {
        $app = ucfirst( strtolower(self::$config->app));
        $controller = "\\{$app}\\controller\\" . ucfirst( strtolower(self::$config->route));
        $action = self::$config->action . 'Action';
        if ( class_exists($controller) ){
            $controller = new $controller(self::$config);
        }else{
            throw new RouteException("Problema com a rota, contoller: " . $controller);
        }
        if ( method_exists($controller, $action) ) {
            self::dispatch($controller, $action);
        } elseif( method_exists($controller, ERROR_ACTION_METHOD)) {
            self::dispatch($controller, ERROR_ACTION_METHOD, 
                    \PHPanda\Std\Messages::getInstance()->getMessage('action_not_found')
            );
        } else {
            throw new RouteException("Problema com a rota");
        }
    }
    
    private static function dispatch(&$controller, $action, $param = '')
    {
        $controller->$action($param);
    }
    
    private static function getAppFilePath()
    {
        return self::$config->app_path . DIRECTORY_SEPARATOR . 'index.php';
    }
    
    private static function getAppPath()
    {
        /**
         * Atribui valor a $pasta caso esteja preenchido
         * se não, atribui 'default'
         */
        $appPath = BASE_PATH . DIRECTORY_SEPARATOR . 'apps' . DIRECTORY_SEPARATOR;
        $appPath .= self::$config->app;
        if ( ! is_dir ($appPath) ){
            throw new RouteException("Erro. Aplica&ccedil;&atilde;o {$appPath} n&atilde;o encontrada! \n");
        }
        
        return $appPath;
    }
    
    private static function startSettings()
    {
        if ( isset($_SERVER["REQUEST_URI"]) ){
            $url_parsed = parse_url($_SERVER["REQUEST_URI"]);
            //die(var_export($url_parsed));
            $data = explode("/", ltrim($url_parsed['path'], '/'));
            self::$config->app = ( !empty($data[0]) ) ? $data[0] : DEFAULT_APP;
            self::$config->route = ( !empty($data[1]) ) ? $data[1] : DEFAULT_CONTROLLER;
            self::$config->action = ( !empty($data[2]) ) ? $data[2] : DEFAULT_ACTION;
        }
    }
    
    private static function registerNamespace()
    {
        $loader = new Loader();
        $namespace = ucfirst( strtolower(self::$config->app . '\\') );
        $loader->addNamespace($namespace, self::getAppPath() );
        $loader->register();
    }
    
    public static function displayErrors()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
    
    public static function errorHadle()
    {
        //TODO
    }
    
    private static function loadAppConfig()
    {
        self::$config->loadPHPConfig(self::$config->app_path .
                DIRECTORY_SEPARATOR .'panda.config.php');
    }
    public static function getConfig()
    {
        return self::$config;
    }

    /**
     * 	Verifica se a requisição da WEB é ajax
     */
    public static function isAjax() {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }
}