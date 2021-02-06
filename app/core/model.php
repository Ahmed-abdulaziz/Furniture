<?php

namespace projectmvc\core;
use Dcblogdev\PdoWrapper\Database as Darabase;

    class model{
        public static function db()
        {
            $option = [
                'username' =>'root',
                'database' => 'furniture',
                'password' => '',
                'type' => 'mysql',
                'charset' => 'utf8',
                'host' => 'localhost',
                'port' => '3306',
    
            ];
           return $db=new Darabase ($option);
        }
    }
?>