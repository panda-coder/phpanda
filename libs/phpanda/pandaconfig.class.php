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
        /**
        * Load the route configs
        */
        protected function LoadRouteConfig()
        {
            $this->route = $_GET["param1"];
            $this->route_param = $_GET["param2"];
            $this->app = $_GET["app"];
            
            if ( !empty($_GET["param3"] ) ){
                if ( $this->is_base64($_GET["param3"]) ){
                    $data_param = json_decode(base64_decode( $_GET["param3"] ), true);
                    if ( is_array( $data_param) ){
                        foreach($data_param as $key => $data ){
                            $this->$key = $data;
                        }//Fim for
                    }else{
                        $this->extra_param = $_GET["param3"];
                    }//Fim if is_array
                }else{
                    $this->extra_param = $_GET["param3"];
                }//Fim if is_base64
            }//Fim if 
        }
        /**
        * Verify if the string is base64
        * 
        * @param string $str
        * @return bool
        */
        private function is_base64($str)
        {
            //TODO
            return (bool)preg_match('`^[a-zA-Z0-9+/]+={0,2}$`', $str);
        }
        /**
         * Load definitions to config
         *
         * @param string $def_file
         */
        public function LoadDefs($def_file)
        {
            //TODO
            $def_path = PATH_ROOT . 'res' . DIRECTORY_SEPARATOR . 'defs';
            $ab_path = $def_path . DIRECTORY_SEPARATOR . $def_file;
            if ( is_file($ab_path) ){
                include($ab_path);
            }
        }
    }
}
?>