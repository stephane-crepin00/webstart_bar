<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class DrinkController extends Controller implements ControllerInterface {
    public function show(){
        $cocktail = false;
        $drink = $this->getData('SELECT * FROM Drink WHERE id='.$_GET['id']);
        $category = $this->getData('SELECT * FROM Drink_has_Category WHERE Drink_id = ' . $_GET['id']);

        foreach ($category as $value) {
            if  ($value['Category_id'] == 3 ){
                $cocktail = true;
            }
        }

        if ($cocktail) {
            $ingredients = $this->getData('SELECT * FROM Ingredient WHERE Drink_id = ' . $_GET['id']);

            $arrayToTemplate = ['title' => $drink[0]['title'], 'drinks' => $drink, 'ingredients' => $ingredients];

            $this->render($arrayToTemplate, 'cocktail');
        } else {
            $arrayToTemplate = ['title' => $drink[0]['title'], 'introduction' => $drink[0]['description'], 'drinks' => $drink];

            $this->render($arrayToTemplate, 'drink');
        }
    }
}