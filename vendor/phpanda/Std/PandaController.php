<?php

namespace PHPanda\Std;

use PHPanda\Exception\PandaException;
use \stdClass;
use PHPanda\Std\PandaModel;
use PHPanda\Std\PandaView;
use PHPanda\Std\PandaConfig;

/**
 * Classe controller.
 *
 * @author  Ercy Moreira Neto <fireball.vb@gmail.com.br>
 * @version 0.2
 * @access  public
 * @package PHPanda
 */
abstract class PandaController
{
    /**
     *
     * @var PandaModel
     */
    public $model;
    /**
     *
     * @var PandaView
     */
    public $view;

    protected $post_data;
    /**
     * @var PandaConfig PHPanda config Objeto que contem as configuracoes
     */
    protected $config;

    /**
     * Construct da controller
     *
     * @access public
     *
     * @param PandaConfig $cfg         set de configuracoes
     * @param bool        $callHandler Se quiser desativar o controle de rota, passar como false
     */
    final function __construct(PandaConfig &$cfg)
    {
        $this->view   = new PandaView($cfg);
        $this->config = &$cfg;

        if ( $this->isPostBack() ) {
            $this->post_data = new stdClass();
            foreach ($_POST as $key => $data) {
                $this->post_data->$key = $data;
            }
        }

        $this->bootstrap();
    }

    public function __call($name, $args)
    {
        throw new PandaException("Function {$name} doens't not exist!", 1);
    }

    /**
     * Dispara um erro
     *
     * @param $error
     *
     * @throws \PHPanda\Exception\PandaException
     */
    public function error($error)
    {
        throw new PandaException("User error: {$error}", 2);
    }

    /**
     * Loga algum evento
     *
     * @access public
     *
     * @param string $msg  Descricao do evento a ser logado
     * @param string $user Usuario a quem é atribuido o evento
     *
     * @throws \PHPanda\Exception\PandaException
     */
    public function logEvent($msg, $user)
    {
        //TODO
        $log_date = date("Y-m-d") . 'T' . date("h:m:s");
        $log      = "[{$log_date}]: {$user} -> {$msg}" . PHP_EOL;
        $dir      = BASE_PATH . DIRECTORY_SEPARATOR . 'logs';
        if ( !is_writable($dir) ) {
            throw new PandaException("Pasta de logs nao possui permissao de escrita");
        }
        $file_log = $dir . DIRECTORY_SEPARATOR . date("Y-m-d") . '.log';
        if ( !file_put_contents($file_log, $log, FILE_APPEND) ) {
            throw new PandaException("Log não pode ser gravado");
        }
    }

    /**
     * Redireciona pagina
     *
     * @access public
     *
     * @param string $url Endereco para o redirecionamento
     *
     * @throws \PHPanda\Exception\PandaException
     */
    public function redirect($url)
    {
        if ( !headers_sent() ) {
            header('Location: ' . $url);
        } else {
            throw new PandaException("Nao pode redirecionar. Header ja enviado");
        }
    }

    /**
     * Redireciona pagina para o endereco principal
     *
     * @access public
     */
    public function redirectDefault()
    {
        $arrCheck = array('default_url');
        if ( $this->config->checkConfigs($arrCheck) ) {
            $this->redirect($this->config->default_url);
        }
    }

    /**
     * Send Email
     *
     * @access public
     *
     * @param string $subject
     * @param string $body
     * @param string $altbody
     * @param array  $TO_CONTACT    Contem os destinarios
     * @param array  $attachment
     * @param array  $attachmentSTR An array of files in base64 ("name", "file")
     *                              as key of each element
     *
     * @throws \PHPanda\Exception\PandaException
     */
    public function EnviaEmail($subject, $body, $altbody,
                               $TO_CONTACT, $attachment = array(),
                               $attachmentSTR = array())
    {
        if ( empty($this->config) ) {
            throw new PandaException("Config not loaded", 2);
        }
        $arrCheck = array('mail_smtp_server', 'mail_smtp_login',
                          'mail_smtp_pass', 'mail_from', 'mail_from_name',
        );
        if ( $this->config->checkConfigs($arrCheck) ) {
            $this->__sendMail($subject, $body, $altbody, $TO_CONTACT,
                $attachment, $attachmentSTR);
        }
    }

    /**
     * Send mail, the true method after the validation
     *
     * @access private
     *
     * @param       string         subject
     * @param       string         body
     * @param       string         altbody
     * @param array $TO_CONTACT    Contem os destinarios
     * @param array $attachment
     * @param array $attachmentSTR An array of files in base64 ("name", "file")
     *                             as key of each element
     */
    private function __sendMail($subject, $body, $altbody,
                                $TO_CONTACT, $attachment = array(),
                                $attachmentSTR = array()
    )
    {
        $mail = new \PHPMailer;
        $mail->isSMTP();
        $mail->Host       = $this->config->mail_smtp_server;
        $mail->Username   = $this->config->mail_smtp_login;
        $mail->Password   = $this->config->mail_smtp_pass;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth   = true;

        $mail->From     = $this->config->mail_from;
        $mail->FromName = $this->config->mail_from_name;

        foreach ($TO_CONTACT as $contact) {
            $mail->addAddress($contact["mail"], $contact["name"]);
        }
        foreach ($attachment as $att) {
            $mail->addAttachment($att);
        }
        foreach ($attachmentSTR as $att) {
            $mail->AddStringAttachment($att["file"], $att["name"], 'base64');
        }
        $mail->Subject   = $subject;
        $mail->Body      = $body;
        $mail->AltBody   = $altbody;
        $mail->SMTPDebug = 1;
        $mail->isHTML(true);
        if ( !$mail->send() ) {
            #echo 'Message could not be sent.';
            #echo 'Mailer Error: ' . $mail->ErrorInfo;
            #throw new PandaException($mail->ErrorInfo,  2);
            echo 'Mailer Error: ' . $mail->ErrorInfo . "\n";
        } else {
            #echo 'Message has been sent';
        }
    }


    /**
     * Generate URL to go
     *
     * @param        $route
     * @param string $route_param
     * @param string $app
     * @param string $extra_param
     *
     * @return string
     * @throws \PHPanda\Exception\PandaException
     */
    public function URLGoTO($route, $route_param = '', $app = '', $extra_param = '')
    {
        if ( empty($app) ) {
            $app = $this->config->app;
        }
        if ( !empty($extra_param) && empty($route_param) ) {
            throw new PandaException("Extra param should be used only after \$route_param");
        }

        $end_url = "";
        if ( !empty($route_param) ) {
            $end_url = '/' . $route_param;
        }
        if ( !empty($extra_param) ) {
            $end_url .= '/' . $extra_param;
        }

        return $this->config->base_url . '/' . $app . '/' . $route . $end_url;
    }

    public function ShowPHPINFO()
    {
        phpinfo();
    }

    public function getRequestedURI()
    {
        return $_SERVER['REQUEST_URI'];
    }


    protected function isPostBack()
    {
        return !empty($_POST);
    }

    abstract protected function bootstrap();
}