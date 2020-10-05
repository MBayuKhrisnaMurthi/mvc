<?php

class App{
    //default
    protected $controller = 'Home';
    protected $method = 'Index';
    protected $params = [];

    public function __construct(){
        $url = $this->parse_url();
        
        //cek apakah ada didalam contollers
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
        }

        //call fuct
        require_once '../app/controllers/' . $url[0] . '.php';
        $this->controller = new $this->controller;
        unset ($url[0]);

        //cek method
        if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset ($url[1]);
        }

        //cek params
        if (!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);

    }
    public function parse_url(){
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}