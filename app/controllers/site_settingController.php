<?php
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\core\Helper;
    use itrax\models\Site_settingModel;
    class Site_settingController extends Controller{
        private $viewpath;
        public function __construct()
        {
            $this->checkLogin();
            $this->viewpath = "dashboard/site_settings/";
        }
        public function theam(){
            return $this->view($this->viewpath."theam");
        }
        public function theamUpdateHandler(){
            if(isset($_POST['theam']) && strlen($_POST['theam'])){
                $site_settingModel = new Site_settingModel();
                $site_settingModel->changeTheam($_POST['theam']);
                $_SESSION['success'] = "The theam is updated successfully.";
            }
            else
                $_SESSION['error'] = "No theam has been selected.";
            Helper::redirect("site_setting/theam");
        }   

    }
?>