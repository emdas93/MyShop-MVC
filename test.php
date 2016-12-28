<?php
class Application{
    private $controller;
    private $action;

    function __construct(){
        $cancontroll=false;
        $url="";
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTERSANFILTER_SANITIZE_URL);
        }
        $params = explode('/',$url);
        $count = count($params);
        $this->controller = "home";
        if(isset($params[0])){
            if(isset($params[0]))$this->controller = $params[0];
        }
        if(file_exists('./'.$this->controller.'.php')){
            require './'.$this->controller.'.php';
            $this->action = "index";
            if(isset($params[1])){
                if($params[1]) $this->action = $params[1];
            }
            if(method_exists($this->controller,$this->action)){
                $cancontroll = true;
                switch($counts){

                }
            }
        }
    }
}
?>
