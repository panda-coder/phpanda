<?php

namespace PHPanda\Std;

use PHPanda\Exception\PandaException;
use PHPanda\Std\PandaConfig;
use PHPanda\IO\PandaJson;
use PHPanda\Std\App;

/**
* Classe para a View
* @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
* @version 0.1
* @access public
* @package PHPanda
*/
class PandaView extends PandaObject
{
    /**
     * @access protected
     * @var string Layout da Pagina padrão
     */
    protected $page = 'index.phtml';
    protected $template = null;
    private $config;
    
    
    function __construct(PandaConfig &$config)
    {
        $this->title = 'Panda View xD';
        $this->config = $config;
        $this->base_path = 'apps/' . $config->app . '/' . 'public';
        $this->page = $config->app_path 
        . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR
        . $config->route . DIRECTORY_SEPARATOR . $config->action . '.phtml' ;
    }
    
    public function ShowTemplate()
    {
        if ( ! APP::isAjax() ){
            if ( $this->template === null){
                throw new PandaException("Template not loaded");
            }
            include $this->template;
        }else{
            $this->ShowJSON(true);
        }
    }
    
    public function setTemplate($template)
    {
        $this->template = BASE_PATH . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR
        . DIRECTORY_SEPARATOR . 'tpl' . DIRECTORY_SEPARATOR . $template . '.phtml';
    }

    public function content()
    {
        if ( ! is_file($this->page)){
            echo "File {$this->page} not found ";
        }else{
            include $this->page;
        }

    }
    
    public function Show()
    {
        if ( ! APP::isAjax() ) {
            if (!is_file($this->page)) {
                throw new PandaException("View file not found");
            }
            include $this->page;
        }else{
            $this->ShowJSON();
        }
    }

    public function ShowJSON($template = false)
    {
        $json = new PandaJson();

        ob_start();
        if ( $template ){
            include $this->template;
        }else{
            include $this->page;
        }
        $content = ob_get_contents();
        ob_end_clean();

        $json->content = $this->page;

        echo $json;
    }
}
