<?php
    namespace itrax\controllers;
    use itrax\core\Helper;
    use itrax\core\Controller;
    class DashboardController extends Controller{
        public function __construct()
        {
            $this->checkLogin();
        }
        public function index(){
            $this->view('dashboard/index');
        }
    }

?>