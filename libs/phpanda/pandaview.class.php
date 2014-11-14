<?php
namespace PHPanda
{
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
        protected $page;
        /*
         * @access protected
         * @var string Javascripts includes
         */
        protected $includes_js = array();
        /*
         * @access protected
         * @var string CSS Includes
         */
        protected $includes_css = array();
        /*
         * @access protected
         * @var string CSS da pagina
         */
        protected $css;
        /*
         * @access protected
         * @var string Layout da Pagina padrão
         */
        protected $body;
        /*
         * @access protected
         * @var string Layout da Pagina padrão
         */
        public $title;
        
        function __construct( $template = 'bpage' ) #bpage = basic page
        {
            $this->title = 'Panda View xD';
            $this->LoadTemplate($template);
        }
        
        public function LoadTemplate($template)
        {
            $file_base_page = PATH_ROOT . DIRECTORY_SEPARATOR . 'res' . DIRECTORY_SEPARATOR . "{$template}.html";
            if ( !is_file($file_base_page) ){
                throw new PandaException("Arquivo nao $template.html nao encontrado!", 2);
            }else{
                $this->page = file_get_contents($file_base_page);
            }
        }
        
        public function addJS($js_name)
        {
            array_push($this->includes_js, $js_name);
        }
        public function addCSS($css_name)
        {
            array_push($this->includes_css, $css_name);
        }
        public function setStyle($style)
        {
            $this->css = $style;
        }
        protected function generateJS()
        {
            $buf = '';
            foreach($this->includes_js as $js){
                $buf .= "<script src='$js'></script>";
            }
            return $buf;
        }
        protected function generateCSS()
        {
            $buf = '';
            foreach($this->includes_css as $css){
                $buf .= "<link rel='STYLESHEET' src='$css' />";
            }
            return $buf;
        }
        protected function generateSTYLES()
        {
            return '<style>' . $this->css . '</style>';
        }
        protected function generateBody()
        {
            $pattern = array('/{%BUTTON_PRIMARY\|([\w\h]*)\|([\w\h]*)\|([\w\h\.\/]*)%}/'
                             );
            $replace = array('<a id="$1" class="btn btn-primary" href="$3">$2</a>'
                             );
            return preg_replace($pattern, $replace, $this->body);
        }
        public function setBody($body)
        {
            $this->body = $body;
        }
        public function ShowDefault()
        {
            $pattern = array('/{%INCLUDES_CSS%}/',
                             '/{%INCLUDES_JS%}/',
                             '/{%STYLE_CSS%}/',
                             '/{%TITLE%}/',
                             '/{%BODY%}/'
                             );
            $replace = array($this->generateCSS(),
                             $this->generateJS(),
                             $this->generateSTYLES(),
                             $this->title,
                             $this->generateBody()
                             );
            $buffer = preg_replace($pattern, $replace, $this->page);
            echo $buffer;
        }
    }
}
?>