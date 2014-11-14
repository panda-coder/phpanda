<?php
namespace PHPanda
{
    loadThird("PHPMailer/PHPMailerAutoload");
    /**
    * Classe controller.
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.2
    * @access public
    * @package PHPanda
    */
    class PandaController
    {
        public $model;
        public $view;
        /**
        * @var PHPanda config Objeto que contem as configuracoes
        */
        private $config;
        public function __call($name, $args)
        {
            throw new PandaException("Function {$name} doens't not exist!",  1);
        }
        /**
        * Dispara um erro
        * @access public
        *
        * @param string $error D
        */
        public function error($error)
        {
            throw new PandaException("User error: {$error}",  2);
        }
        /**
        * Loga algum evento
        * @access public
        *
        * @param string $msg Descricao do evento a ser logado
        * @param string $user Usuario a quem é atribuido o evento
        */
        public function logEvent($msg, $user)
        {
            //TODO
            echo "here";
            $log_date = date("Y-m-d") . 'T' . date("h:m:s");
            $log = "[{$log_date}]: {$user} -> {$msg}" . PHP_EOL;
            $file_log = PATH_ROOT . DIRECTORY_SEPARATOR . 'logs' .
            DIRECTORY_SEPARATOR . date("Y-m-d") . '.log';
            if ( !file_put_contents($file_log, $log, FILE_APPEND) ){
                throw new PandaException("Log não pode ser gravado");
            }
        }
        /**
        * Redireciona pagina
        * @access public
        *
        * @param string $url Endereco para o redirecionamento
        */
        public function redirect($url)
        {
            if (!headers_sent()) {
                header('Location: ' . $url);
            }else{
                //TODO
            }
        }
        /**
        * Redireciona pagina para o endereco principal
        * @access public
        */
        public function redirectDefault()
        {
            $arrCheck = array('default_url');
            if ( $this->config->checkConfigs($arrCheck) ){
                $this->redirect( $this->config->default_url );
            }
        }
        /**
        * Send Email
        * @access public
        *
        * @param string subject
        * @param string body
        * @param string altbody
        * @param array $TO_CONTACT Contem os destinarios
        * @param array $attachment
        * @param array $attachmentSTR An array of files in base64 ("name", "file")
        * as key of each element
        */
        public function EnviaEmail( $subject, $body, $altbody,
                                    $TO_CONTACT, $attachment = array(),
                                    $attachmentSTR = array() )
        {
            if ( empty($this->config) ){
                throw new PandaException("Config not loaded",  2);
            }
            $arrCheck = array('mail_smtp_server', 'mail_smtp_login',
                              'mail_smtp_pass', 'mail_from', 'mail_from_name'
                              );
            if ( $this->config->checkConfigs($arrCheck) ){
                $this->__sendMail($subject, $body, $altbody, $TO_CONTACT,
                                  $attachment, $attachmentSTR);
            }
        }
        /**
        * Send mail, the true method after the validation
        * @access private
        *
        * @param string subject
        * @param string body
        * @param string altbody
        * @param array $TO_CONTACT Contem os destinarios
        * @param array $attachment
        * @param array $attachmentSTR An array of files in base64 ("name", "file")
        * as key of each element
        */
        private function __sendMail( $subject, $body, $altbody,
                                    $TO_CONTACT, $attachment = array(),
                                    $attachmentSTR = array()
        ) {
            $mail = new \PHPMailer;
            $mail->isSMTP();
            $mail->Host = $this->config->mail_smtp_server;
            $mail->Username = $this->config->mail_smtp_login;
            $mail->Password = $this->config->mail_smtp_pass;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            
            $mail->From = $this->config->mail_from;
            $mail->FromName = $this->config->mail_from_name;
            
            foreach($TO_CONTACT as $contact){
                $mail->addAddress($contact["mail"], $contact["name"]);
            }
            foreach($attachment as $att){
                $mail->addAttachment($att);
            }
            foreach($attachmentSTR as $att){
                $mail->AddStringAttachment($att["file"], $att["name"], 'base64');
            }
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $altbody;
            $mail->SMTPDebug  = 1; 
            $mail->isHTML(true);
            if ( ! $mail->send() ) {
                #echo 'Message could not be sent.';
                #echo 'Mailer Error: ' . $mail->ErrorInfo;
                #throw new PandaException($mail->ErrorInfo,  2);
                echo 'Mailer Error: ' . $mail->ErrorInfo . "\n";
            } else {
                #echo 'Message has been sent';
            }
        }
        /**
        * Construct da controller 
        * @access public
        *
        * @param PandaConfig $cfg set de configuracoes
        * @param bool $callHandler Se quiser desativar o controle de rota, passar como false
        */
        function __construct(PandaConfig $cfg, $callHandler = TRUE ){
            $this->config = $cfg;
            if ( ! $cfg->isConfigured("mail_smtp_server") ){
                throw new PandaException("Email configuration not especified",  2);
            }
            $this->model = new PandaModel();
            $this->view = new PandaView();
            
            if ( $callHandler ){
                $this->HandlerRouter();
            }
        }
        /**
        * Handler Route
        * @access public
        *
        * @param string subject
        * as key of each element
        */
        public function HandlerRouter()
        {
            try{
                //Rota
                $route = $this->config->route;
                if ( !empty($route) ){
                    if ( method_exists ( $this, $route )){
                        $this->$route();
                        //call_user_func('$this->' . $route);
                    }else{
                        throw new PandaException("Route doen'st exist!");
                    }
                }
            }catch(PandaException $e){
                //Criar um layout para excessão
                //TODO
                echo $e->getMessage();
            }
        }
    }
}
?>