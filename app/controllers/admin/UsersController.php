<?php

namespace MyApp\Controllers\Admin;

use MyApp\Models\Users as Users;

class UsersController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateBefore('private');
    }
    public function indexAction()
    {
        print "aca";
    	$this->view->users =Users::find();
    }
}
