<?php

ini_set('display_errors', 1);

//autoloading with + without Composer

//without
//require_once('autoload.php');
//require_once('constants.php');


//with
require_once('vendor/autoload.php');
require_once('loader.php');

use \JasonFramework\Bundle\FrontBundle\Classes\Test;

$test = new Test;

//for security reason allow only controller listed below
$expected_controllers = ['Index', 'Home'];

if(!empty($_GET)){
    if(in_array($_GET['controller'], $expected_controllers)){
        $controller = new Loader($_GET);
        $controller = $controller->createController();
        $controller->executeAction();
    }
}
