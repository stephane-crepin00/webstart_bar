<?php

namespace App\Controller\Admin;

use App\Controller\Common\ControllerInterface;

class UserController implements ControllerInterface { 
    public function show() {
        echo 'Admin User Controller';
    }
}