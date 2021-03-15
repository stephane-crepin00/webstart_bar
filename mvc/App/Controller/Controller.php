<?php

namespace App\Controller;

use \PDO;

abstract class Controller {
    protected function getData($sql): array {
        $pdo = new PDO('mysql:host=localhost;dbname=webstart_bar', 'webstart_bar', 'webstart_bar_pwd');
        $state = $pdo->prepare($sql);
        $state->execute();
        return $state->fetchAll();
    }

    protected function render(array $arrayToTemplate, string $page) {
        ob_start();
        extract($arrayToTemplate);
        ob_get_clean();
        Require_once ROOT . "/App/Views/" . $page . ".php";
    }
}