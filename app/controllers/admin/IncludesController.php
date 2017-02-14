<?php

namespace MyApp\Controllers\Admin;

use MyApp\Models\Users as Users;

class IncludesController extends ControllerBase
{

    public function initialize()
    {
    }
    public function menuAction()
    {
         //Llamar tabla menu, devolver array
         $this->view->setVar("title",           "Includes");
    }
}
