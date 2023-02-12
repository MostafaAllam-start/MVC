<?php
    namespace itrax\core;
    class Controller{
        // // importing the model class name 
        // protected $model;
        // public function __construct()
        // {
        //     $controller_class_name = explode("\\", STATIC::class)[2];
        //     $model_class_name = "itrax\\models\\".trim($controller_class_name, 'Controller')."tModel";
        //     if(class_exists($model_class_name));
        //         $this->model = new $model_class_name;
        // }
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