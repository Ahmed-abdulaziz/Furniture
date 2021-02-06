<?php

    namespace projectmvc\core;
    use projectmvc\core\controller;


    class helpers extends controller{

        public static function redirect($path){

              
               header("Location:http://mvc.test/".$path);
                
        }

        public static function assets($path){

              
            echo DOMAIN_NAME.$path;
             
     }
    }

?>