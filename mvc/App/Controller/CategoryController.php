<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface;

class CategoryController extends Controller implements ControllerInterface {
    public function show() {
        $drinks = $this->getData("SELECT * FROM Drink d INNER JOIN Card_has_Drink cd ON cd.drink_id = d.id INNER JOIN Drink_has_Category dc ON dc.Drink_id = d.id WHERE cd.Card_id = " . $_GET['id'] . " ORDER BY dc.category_id");
        $arrayToTemplate = ['title' => $category[0]['title'], 'introduction' => $category[0]['description'], 'categ' => $category];

      //  $this->render($arrayToTemplate, 'drink');
    }
}