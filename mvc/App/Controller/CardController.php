<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class CardController extends Controller implements CInterface{
    public function show(){
        $card = $this->getData('SELECT * FROM Card WHERE id='.$_GET['id']);
        $drinks = $this->getData("SELECT * FROM Drink d INNER JOIN Card_has_Drink cd ON cd.drink_id = d.id INNER JOIN Drink_has_Category dc ON dc.Drink_id = d.id WHERE cd.Card_id = " . $_GET['id'] . " ORDER BY dc.category_id");
        $arrayToTemplate = ['title' => $card[0]['title'], 'introduction' => $card[0]['description'], 'drinks' => $drinks];

        $this->render($arrayToTemplate, 'card');
    }
}