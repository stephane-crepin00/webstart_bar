<?php

namespace Core;

use \PDO;

class Autoloader {
    static function register($admin = '') {
        spl_autoload_register(array(__CLASS__, 'autoload' . $admin));
    }

    static function autoload($class) {
        include_once '../App/Controller/' . $class . '.php';
    }

    static function autoloadAdmin($class) {
        include_once '../App/Controller/Admin/' . $class . '.php';
    }
}