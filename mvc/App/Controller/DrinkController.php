<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class DrinkController extends Controller implements ControllerInterface {
    public function show(){
        $drink = $this->getData('SELECT * FROM Drink WHERE id='.$_GET['id']);
        $ingredient = $this->getData("SELECT * FROM Ingredient WHERE Drink_id = " . $_GET['id'] . " ");
        $arrayToTemplate = ['title' => $drink[0]['title'], 'introduction' => $drink[0]['description'], 'ingredient' => $ingredient];

        $this->render($arrayToTemplate, 'drink');
    }
}