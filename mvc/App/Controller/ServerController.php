<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class ServerController extends Controller implements CInterface{
    public function show(){
        $servers =  $this->getData('SELECT * FROM Server');

        $arrayToTemplate = ['title' => 'Webstart Bar', 'introduction' => "Serveur" , 'servers' => $servers];

        $this->render($arrayToTemplate, 'servers');   
    }

    public function getServerByID() {
        $servers =  $this->getData('SELECT * FROM Server WHERE id='.$_GET['id']);
        
        $arrayToTemplate = ['title' => 'Webstart Bar', 'introduction' => "Serveur" , 'servers' => $servers];

        $this->render($arrayToTemplate, 'server');   
    }
}