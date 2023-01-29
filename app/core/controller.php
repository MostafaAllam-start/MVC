<?php
    namespace itrax\core;
    class Controller{
        protected function view($path){
            require VIEWS.$path.".php";
        }
    }
?>