<?php
    namespace itrax\core;
    class Controller{
        protected function view($path, $params=[]){
            extract($params);
            require VIEWS.$path.".php";
        }
        protected function checkLogin(){
            session_start();
            if(!isset($_SESSION['user'])){
                Helper::redirect('user/login');
            }
        }
    }
?>