<?php

namespace MyApp\Controllers;

use MyApp\Models\Users as Users;

class UsersController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateBefore('login');
    }
    public function indexAction()
    {
        print "aca";
    	$this->view->users =Users::find();
    }
}
