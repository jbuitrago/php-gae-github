<?php

namespace MyApp\Controllers;

class SessionController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateBefore('login');
        $this->assets
            ->addCss('css/bootstrap.min.css')
            ->addCss('css/navbar-fixed-top.css')
            ->addCss('css/signin.css');
            
        $this->assets
            ->addJs('js/bootstrap.min.js');
    }
    public function indexAction()
    {
    	echo '[' . __METHOD__ . ']';
    }
    
    public function loginAction()
    {
    	
    }
}
