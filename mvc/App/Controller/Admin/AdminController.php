<?php

namespace App\Controller\Admin;

use App\Controller\Common\ControllerInterface;
use App\Controller\Controller;

class AdminController extends Controller implements ControllerInterface { 
    public function show() {
        $cards = $this->getData('SELECT * FROM Card');
        $servers =  $this->getData('SELECT * FROM Server');

        $arrayToTemplate = ['title' => "Webstart Bar", 'cards' => $cards, 'servers' => $servers];

        $this->render($arrayToTemplate, 'admin');        
    }

    public function changeDataCardDisplay() {
        $card = $this->getData('SELECT * FROM Card WHERE id = ' . $_GET['id']);
        $card[0]['active'] == 1 ? $active = 0 : $active = 1;

        $this->getData('UPDATE Card SET Card.active = ' . $active . ' WHERE Card.id = ' . $_GET['id']);
        $this->show();
    }

    public function changeDataServerDisplay() {
        $server = $this->getData('SELECT * FROM Server WHERE id = ' . $_GET['id']);
        
        $server[0]['active'] == 1 ? $active = 0 : $active = 1;

        $this->getData('UPDATE Server SET Server.active = ' . $active . ' WHERE Server.id = ' . $_GET['id']);
        $this->show();
    }
}