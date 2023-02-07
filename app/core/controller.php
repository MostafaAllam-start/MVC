<?php
    namespace itrax\core;
    use itrax\models\userModel;
    class Controller{
        protected function view($path){
            require VIEWS.$path.".php";
        }
    }
?>