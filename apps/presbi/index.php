<?php
require 'libs/core.php';


$config = new \PHPanda\PandaConfig();
$config->LoadConfig('test.ini');


class ControllerTest extends \PHPanda\PandaController{
    public function index()
    {
         //echo 'Hello World!';
        $this->view->LoadTemplate('index_p');
        
        $this->view->ShowDefault();
        
        $this->logEvent('Pepa acessou o site','no-user' );
    }
    public function presbi()
    {
        $this->view->LoadTemplate('inside_p');
        $this->view->subtitle = "A presbi";
        
        $snapwidget = '<iframe src="http://snapwidget.com/in/?h=cHJlc2JpYWxwaGF8aW58MTI1fDZ8Mnx8bm98NXxub25lfG9uU3RhcnR8eWVzfG5v&ve=161114" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:780px; height:260px"></iframe>';
        $body = "

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at augue posuere tellus fringilla laoreet. Pellentesque sodales a eros vitae congue. Nunc sollicitudin nisi tellus, ut pharetra arcu congue nec. Aenean hendrerit pretium diam id suscipit. Suspendisse nulla enim, faucibus eu sollicitudin id, lacinia ut dolor. In accumsan aliquam risus. Fusce lacinia sodales rutrum. Ut quis ante ac dui molestie ultrices. Pellentesque at imperdiet enim. Curabitur non fermentum tortor. Integer vel interdum nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam quam mauris, pretium id nunc nec, maximus elementum odio.

Quisque facilisis enim non nisi ullamcorper vehicula id ut ligula. Pellentesque orci justo, commodo nec sagittis non, tristique a massa. Morbi bibendum convallis arcu, aliquam laoreet velit. Nulla placerat dictum felis, eget porta nisi interdum ut. Nulla eleifend lobortis nulla ut finibus. Aliquam ac convallis urna, in semper lectus. Vestibulum porta nibh non mauris dignissim condimentum. Etiam cursus vehicula neque, gravida varius ex fermentum ut. Integer commodo vestibulum vehicula. Integer nec lacus sapien. Aenean bibendum aliquam sapien vel interdum.

Nulla leo sapien, tempor non ullamcorper in, dapibus vel quam. Cras ornare id quam eu accumsan. Vestibulum hendrerit ut elit vitae pellentesque. Suspendisse rutrum eget lorem in malesuada. Donec a libero placerat, aliquam odio sed, accumsan augue. In consequat urna eu ipsum commodo, quis cursus diam finibus. Curabitur vehicula, felis a euismod pharetra, ipsum dolor eleifend sapien, et commodo enim urna eget lorem. Nullam ac pharetra justo, at efficitur tellus.

Morbi ut eros imperdiet, dictum metus in, vulputate purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut ut placerat nunc. Sed quis mi pulvinar dui commodo ornare fermentum sed dolor. Integer imperdiet nec nisi sed vestibulum. Aliquam vitae congue felis. Nullam pharetra ligula id euismod feugiat. Donec non metus luctus, commodo ante sit amet, scelerisque est. Morbi vel nisi ut nisl varius feugiat sit amet sit amet ipsum. Phasellus molestie orci diam, auctor tempus quam placerat finibus. Fusce sollicitudin lacus sit amet congue condimentum. Nam congue libero quis sollicitudin porttitor.

Donec quis quam sit amet ligula semper vulputate eu sit amet libero. Cras eget lacus eu nulla facilisis convallis. Curabitur sit amet pulvinar nunc, et semper magna. Vivamus tincidunt justo enim, sit amet pharetra metus tincidunt eget. Etiam finibus eleifend eros, non fermentum mauris consequat eget. Sed feugiat velit libero, a pellentesque diam pulvinar vel. Donec quam nunc, vulputate vulputate nisi a, accumsan aliquam est. Pellentesque vitae neque et lacus consectetur sodales non at ante. Cras consequat luctus odio, id vestibulum nunc imperdiet et. Suspendisse nec luctus odio. Aenean eros velit, gravida et dolor non, ultricies condimentum metus. Sed ut augue neque. In pretium massa quis nisi pellentesque hendrerit non quis lorem. Nulla iaculis rhoncus ultricies.
Foram gerados 5 parágrafos, 457 palavras e 3100 bytes de Lorem Ipsum
";
        $body = nl2br($body) . $snapwidget;
        
        
        $this->view->setBody($body);
        
        $this->view->ShowDefault();
        
        $this->logEvent('Pepa acessou o site','no-user' );
    }
    function __construct($config)
    {
        parent::__construct($config, false);
        $this->view->title = 'Modelo Presbi';
        $this->view->addCSS('../res/css_third/bootstrap.min.css');
        
        $this->HandlerRouter();
    }
}


$controller = new ControllerTest($config);



?>