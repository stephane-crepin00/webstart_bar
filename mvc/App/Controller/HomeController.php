<?php

namespace App\Controller;

use App\Controller\Common\ControllerInterface as CInterface;

class HomeController extends Controller implements CInterface{
    public function show(){
        $datas =  $this->getData('SELECT * FROM Card WHERE active = 1');
        $servers = $this->getData('SELECT * FROM Server WHERE active = 1');
        
        $arrayToTemplate = ['title' => 'Webstart Bar', 'introduction' => "Bienvenue sur notre site Webstart bar...." , 'cards' => $datas, 'servers' => $servers];

        $this->render($arrayToTemplate, 'home');   
    }
}