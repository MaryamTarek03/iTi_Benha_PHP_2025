<?php

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';

    protected $params = [];

    public function __construct() {
        // echo "App initialized<br>";

        $this->prepareURL();
        $this->render();
    }

    public function prepareURL() {
        // just the path (without query string)
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // PHP_URL_PATH to get the PATH only so we dont write $path["path"]
        if ($path == '/') 
            return;
        $pathParts = explode('/', trim($path, '/')); // trim to remove leading/trailing slashes

        $this->controller = isset($pathParts[0]) ? ucfirst($pathParts[0]) . 'Controller' : "HomeController";
        $this->method = isset($pathParts[1]) ? $pathParts[1] : "index";
        $this->params = array_slice($pathParts, 2);

        // echo "Controller: " . $this->controller . "<br>";
        // echo "Method: " . $this->method . "<br>";
        // echo "Params: " . print_r($this->params) . "<br>";
    }

    public function render() 
    {
        if (class_exists($this->controller)) {
            $controller = new $this->controller;

            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->params); // we cant access method normally so we use this function
            } else {
                View::load('error', ['title' => 'Method Not Found']);
            }
        } else {
            View::load('error', ['title' => 'Controller Not Found']);
        }
    }
}