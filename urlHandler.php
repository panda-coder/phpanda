<?php
    /**
    * Atribui valor a $pasta caso esteja preenchido
    * se não, atribui 'default'
    */
    $pasta = 'apps' . DIRECTORY_SEPARATOR;
    $pasta .= ( isset($_GET["app"] ) ) ? $_GET["app"] : 'default';
    if ( ! is_dir ($pasta) ){
        header('content-type text/html charset=utf 8');
        die("Erro. Aplica&ccedil;&atilde;o {$_GET["app"]} n&atilde;o encontrada! \n");
    }
    $app = $pasta . DIRECTORY_SEPARATOR . 'index.php';
?>
