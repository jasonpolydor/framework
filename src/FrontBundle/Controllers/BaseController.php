<?php

namespace JasonFramework\Bundle\FrontBundle\Controllers;

/**
 * Created by PhpStorm.
 * User: digital14
 * Date: 7/25/18
 * Time: 11:12 AM
 */
/**
 * Class BaseController since it is a base controller it should be abstract
 * @package Src\Controllers
 */
abstract class BaseController
{
    protected $url;
    protected $action;

    function __construct($url, $action)
    {
        $this->url = $url;
        $this->action = $action;
    }

    function executeAction(){
        if(!empty($this->action)) return $this->{$this->action}();
    }

    function executeView($viewName){
        $view_file = __DIR__ . DIRECTORY_SEPARATOR. 'Views' .get_class(this) . DIRECTORY_SEPARATOR . $viewName.'.php';

        if(file_exists($view_file)){
            require_once($view_file);
        }else{
            throw  new \Exception('View not found');
        }
    }

}