<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        echo "Hello world\n";
        $this->view->disable();
    }

}

