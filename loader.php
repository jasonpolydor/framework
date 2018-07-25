<?php
/**
 * Created by PhpStorm.
 * User: digital14
 * Date: 7/24/18
 * Time: 5:41 PM
 */

function loader($class){
    $class_file = DIR. DS . $class . '.php';

    if(file_exists($class_file)){
        require_once($class_file);
    }else{
        foreach (AUTOLOAD_CLASSES as $path){
            $class_file = $path . DS . $class . '.php';
            if(file_exists($class_file)) require_once($class_file);
        }
    }
}

//allow php to look for the loader.php loader function
spl_autoload_register('loader');