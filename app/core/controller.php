<?php
    namespace itrax\core;
    use itrax\models\userModel;
    class Controller{
        protected function view($path){
            $user = new userModel;
            $users = $user->getAllUsers();
            echo "<pre>";
            print_r($users);
            require VIEWS.$path.".php";
        }
    }
?>