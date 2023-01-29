<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;

    class userController extends Controller{
        public function index(){
            return $this->view("userView");
        }
    }
?>