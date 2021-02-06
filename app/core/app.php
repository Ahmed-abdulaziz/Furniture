<?php 

namespace projectmvc\core;
// use projectmvc\Controllers;

    class App{

            private $controller;

            private $method;

            private $variable;

        function __construct()
        {
            $this->geturl();
            $this->render();
        }

        private function geturl(){
            if(!empty($_SERVER['REQUEST_URI'])){

                $url = explode("/",$_SERVER['REQUEST_URI']);  
                // index/home/2/4   => controller(index )   method(home)    variable(2,4)
                  unset($url[0]);
                  $this->controller = !empty($url[1]) ? $url[1] :'maincontroller';   // index
                  $this->method = !empty($url[2]) ? $url[2] :'home'; // home
               
                   unset($url[1],$url[2]);
      
                  $this->variable=array_values(($url));    // 2,4
            }else{
                $this->controller = 'maincontroller';
                $this->method = 'home';
            }
           
   
        }
        private function render(){

            $controller ="projectmvc\Controllers\\".$this->controller;    //path of controller
           
            if(class_exists($controller)){

               

                $controller = new  $controller;
              
            }else{
                
                echo "class Is not found";
            }
            if(method_exists($controller, $this->method )){
                call_user_func_array([$controller,$this->method], $this->variable);
            }else{
                
                echo "Method Is not found";
            }
        }
    }