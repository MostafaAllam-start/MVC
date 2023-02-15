<?php
    define("DS", DIRECTORY_SEPARATOR);
    define("ROOT", dirname(__DIR__));
    define("MVC", 'mvc');
    define("APP", ROOT.DS.MVC.DS.'app');
    define("CONTROLLERS", APP.DS."controllers".DS);
    define("MODELS", APP.DS."models".DS);
    define("VIEWS", APP.DS."views".DS);
    define("VENDOR", ROOT.DS.MVC.DS."vendor".DS);
    define("_PUBLIC", ROOT.DS.MVC.DS."public".DS);
    define("DASHBOARD_LAYOUT", ROOT.DS.MVC.DS."public".DS."dashboard".DS."layout".DS);
    define("UPLOADED_IMGES_PATH", ROOT.DS.MVC.DS."public".DS."dashboard".DS."images".DS);
    define("FOOD_ASSETS", "http://localhost/MVC/public/website/food/");
    define("NIKE_ASSETS", "http://localhost/MVC/public/website/nike/");
    define("THEAMS", "http://localhost/MVC/public/website/theams/");
    define("ASSETS", "http://localhost/MVC/public/dashboard/assets/");
    define("UPLOADED_FILES", "http://localhost/MVC/public/dashboard/images/");
    define("MAIN_ROUT", "http://localhost/MVC/");
    require_once VENDOR.'autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(ROOT.DS.MVC);
    $dotenv->load();
    $app = new itrax\core\App();
?>