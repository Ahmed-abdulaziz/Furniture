<?php
define("DS",DIRECTORY_SEPARATOR);         //    ( / , \ )
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("Controller",APP.DS.'controller');
define("CORE",APP.DS.'core');
define("VIEW",APP.DS.'view');

define("DOMAIN_NAME","http://mvc.test/");

require_once("../vendor/autoload.php");       // require all class

$ob=new projectmvc\core\App();
