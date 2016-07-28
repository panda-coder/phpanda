<?php

namespace Standart\controller;

use PHPanda\Std\PandaController;

class Index extends PandaController
{
    public function indexAction()
    {
        $this->view->setTemplate('admin_lte');

        $this->view->ShowTemplate();
    }

    public function bootstrap()
    {
        //nothing
    }
}