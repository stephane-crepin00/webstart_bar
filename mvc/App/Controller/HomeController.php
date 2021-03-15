<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class HomeController extends Controller implements ControllerInterface{
    public function show() {
        echo "Hello World!!";
    }
}