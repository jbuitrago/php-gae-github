<?php

namespace MyApp\Models;

use Phalcon\Mvc\Model;

class Products extends Model
{
    protected $id;
    protected $name;
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }


    
}
