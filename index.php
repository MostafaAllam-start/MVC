<?php
    
    define("DS", DIRECTORY_SEPARATOR);
    define("ROOT", dirname(__DIR__));
    define("MVC", 'mvc');
    define("APP", ROOT.DS.MVC.DS.'app');
    define("CONTROLLERS", APP.DS."controllers".DS);
    define("MODELS", APP.DS."models".DS);
    define("VIEWS", APP.DS."views".DS);
    define("VENDOR", ROOT.DS.MVC.DS."vendor".DS);
    require_once VENDOR.'autoload.php';
    $app = new itrax\core\app();
?>