<?php
    namespace itrax\core;
    class Controller{
        protected $title;
        protected function view($path, $params=[]){
            extract($params);
            $class_name = explode("\\", STATIC::class)[2];
            $title = substr_replace($class_name, "", -10);
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