<?php

namespace MyApp\Controllers\Admin;

//use MyApp\Models\Products as Products;

class ProductsController extends ControllerBase
{

    public function initialize()
    {
               $this->view->setTemplateBefore('indexlayout');
        //$this->view->setpartialsDir('menu');
        
        $this->assets
            ->addCss('/assets/css/bootstrap.min.css')
            ->addCss('/assets/font-awesome/4.5.0/css/font-awesome.min.css')
            ->addCss('/assets/css/fonts.googleapis.com.css')
            ->addCss('/assets/css/ace.min.css')
            ->addCss('/assets/css/ace-part2.min.css')
            ->addCss('/assets/css/ace-skins.min.css')
            ->addCss('/assets/css/ace-rtl.min.css');
       
        $this->assets
            ->addJs('/assets/js/jquery-2.1.4.min.js')                
            ->addJs('/assets/js/bootstrap.min.js')                
            ->addJs('/assets/js/jquery-ui.custom.min.js')                
            ->addJs('/assets/js/jquery.ui.touch-punch.min.js')                
            ->addJs('/assets/js/jquery.easypiechart.min.js')                
            ->addJs('/assets/js/jquery.sparkline.index.min.js')                
            ->addJs('/assets/js/jquery.flot.min.js')                
            ->addJs('/assets/js/jquery.flot.pie.min.js')                
            ->addJs('/assets/js/jquery.flot.resize.min.js')                
            ->addJs('/assets/js/ace-elements.min.js')
            ->addJs('/assets/js/ace.min.js');
    }
    public function indexAction()
    {
        $this->view->title           = "Jorge";
    	$this->view->product = 1;
    }

}
