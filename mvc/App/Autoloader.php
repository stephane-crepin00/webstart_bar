<?php

include_once '../App/Interface/ControllerInterface.php';

class Autoloaderr {
    static function register($admin = ''){
        spl_autoload_register(array(__CLASS__, 'autoload'.$admin));
    }

    static function autoload($class) {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__. '\\','',$class);
            $class = str_replace('\\','/',$class);
            require __DIR__ . '/' . $class . '.php'; 
        }
      //  include_once '../App/Controller/'.$class.'.php';
    }

    
    static function autoloadAdmin($class) {
        include_once '../App/Controller/Admin/'.$class.'.php';
    }
}