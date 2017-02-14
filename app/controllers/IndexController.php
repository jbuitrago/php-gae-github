<?php

namespace MyApp\Controllers;

class IndexController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateBefore('index');
        $this->assets
            ->addCss('css/bootstrap.min.css')
            ->addCss('css/navbar-fixed-top.css');
            
        $this->assets
            ->addJs('js/bootstrap.min.js');
    }
    
    
    public function indexAction()
    {

    }
   
        public function newAction()
    {
    	echo '[' . __METHOD__ . ']';
    /*        $this->assets
            ->addCss('css/bootstrap.min.css')
            ->addCss('css/navbar-fixed-top.css');*/
    }
}
