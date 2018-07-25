<?php

ini_set('display_errors', 1);

//autoloading with + without Composer

//without
//require_once('loader.php');
//require_once('constants.php');


//with
require_once('vendor/autoload.php');

use \Src\Classes\Test;

$test = new Test;
