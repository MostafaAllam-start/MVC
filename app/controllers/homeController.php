<?php 
    namespace itrax\controllers;

use Collator;
use itrax\core\Controller;
use itrax\core\Helper;
    use itrax\models\Site_settingModel;
    class HomeController extends Controller{
        public function index(){
            $site_setting_model = new Site_settingModel();
            $theam  = $site_setting_model->getSettingValue("theam"); 
            return $this->view("website/$theam/index");
        }
    }
?>