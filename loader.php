<?php

/**
 * Created by PhpStorm.
 * User: digital14
 * Date: 7/25/18
 * Time: 10:50 AM
 */

/**
 * Class Loader define routing of url to map on controller and execute its specific actions
 */
class Loader
{
    private $url;
    private $controller;
    private $action;

    private $namespace = "JasonFramework\\Bundle\\FrontBundle\\Controllers\\";

    function __construct( $url )
    {
        if(!empty($_GET)){
            $this->url = $_GET;
        }

        if(isset($this->url['controller'])){
            $this->controller = $this->namespace . $this->url['controller'];
        }else{
            $this->controller = $this->namespace . 'Home';
        }

        if(isset($this->url['action'])){
            $this->action = $this->url['action'];
        }else{
            $this->action = 'index';
        }
        var_dump($this->controller);
    }

    function createController(){
        var_dump('in create controller');
        var_dump($this->controller);
        var_dump(class_exists($this->controller));
        if(class_exists($this->controller)){
            $parent = class_parents($this->controller);

            if(in_array('BaseController', $parent)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->url, $this->action);
                }else{
                    throw new \Exception("Method {$this->action} does not exist.");
                }
            }else{
                throw new \Exception("BaseController of Controller {$this->controller} not found.");
            }
        }else{
            throw new \Exception("Controller {$this->controller} not found.");
        }
    }
}