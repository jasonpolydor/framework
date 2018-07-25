<?php
/**
 * Created by PhpStorm.
 * User: digital14
 * Date: 7/24/18
 * Time: 5:45 PM
 */

define('DIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

define('CLASSES', DIR . DS . 'Classes');
define('CONTROLLERS', DIR . DS . 'Controllers');
define('MODELS', DIR . DS . 'Models');
define('VIEWS', DIR . DS . 'Views');

define('AUTOLOAD_CLASSES', [CLASSES, CONTROLLERS, MODELS, VIEWS]);