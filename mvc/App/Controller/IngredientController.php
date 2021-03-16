<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class IngredientController extends Controller implements ControllerInterface {
    public function show() {
        echo "Hello I'm in the IngrdientController";
    }
}