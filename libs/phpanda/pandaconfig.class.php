<?php
namespace PHPanda
{
    /**
    * Esta classe é a responsavel por set de configuracoes.
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package PHPanda
    */
    class PandaConfig extends PandaObject
    {
        function __construct()
        {
            $this->LoadRouteConfig();
        }
        /**
        * @var configArr
        */
        protected $configArr = array();
        public function setConfig($key, $value)
        {
            $this->configArr[$key] = $value;
        }
        public function getConfig($key)
        {
            return $this->configArr[$key];
        }
        public function __get($key)
        {
            return $this->getConfig($key);
        }
        public function __set($key, $value)
        {
            $this->setConfig($key, $value);
        }
        public function __toString()
        {
            $arrOut = array("Name" => "PandaConfig",
                            "Configuracoes" => $this->configArr);
            return print_r($arrOut, true);
        }
        public function isConfigured($opt)
        {
            return isset($this->configArr[$opt]) && !empty($this->configArr[$opt]);
        }
        /* Verify the param passed
         *
         * @param array $opt Um array com opções que deverão ser verificadas
         *
         * @return bool Retorn True if the configs passed is ok
         */
        public function checkConfigs($opt)
        {
            $verify = TRUE;
            foreach($opt as $op){
                if ( ! isset($this->configArr[$op]) ){
                    $verify = FALSE;
                    throw new PandaException("The {$op} is not configured", 2);
                }
            }
            return $verify;
        }
        /* Load Config
         *
         * @param array $file Arquivo a ser carregado
         */
        public function LoadConfig($file)
        {
            //$PASTA = getcwd();
            $trace = debug_backtrace();
            $PASTA = dirname($trace[0]["file"]);
            $FULLPATH = $PASTA . DIRECTORY_SEPARATOR . $file;
            
            $cfg = parse_ini_file($FULLPATH);
            //print_r($cfg);
            foreach($cfg as $key => $config){
                $this->$key = $config;
            }
        }
        protected function LoadRouteConfig(){
            $this->route = $_GET["param1"];
            $this->route_param = $_GET["param2"];
            $this->app = $_GET["app"];
        }
    }
}
?>