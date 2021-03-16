<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class ServerController extends Controller implements CInterface{
    public function show(){
        $servers =  $this->getData("SELECT * FROM Server");
        $arrayToTemplate = ['title' => 'webstart bar', 'introduction' => "Webstart Bar" , 'servers' => $servers];

        $this->render($arrayToTemplate, 'drink');   
    }

    public function getServer() {
        $servers =  $this->getData("SELECT * FROM Server");

        return $servers;   
    }
}