<?php

namespace Myapp\Models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    protected $id;
    protected $username;
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }


    
}
