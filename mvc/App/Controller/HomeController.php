<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class HomeController extends Controller implements CInterface{
    public function show(){
        $datas =  $this->getData("SELECT * FROM Card");
       // $servers = Server::getServer();
        $arrayToTemplate = ['title' => 'Webstart Bar', 'introduction' => "Bienvenue sur notre site Webstart bar...." , 'cards' => $datas];

        $this->render($arrayToTemplate, 'home');   
    }
}