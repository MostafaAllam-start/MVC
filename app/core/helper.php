<?php 
    namespace itrax\core;
    

    class Helper{
        static function redirect($path){
            header("Location: http://localhost/MVC/".$path);
        }
    }

?>