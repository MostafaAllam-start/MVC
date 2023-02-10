<?php 
    namespace itrax\core;
    

    class Helper{
        static function redirect($path){
            header("Location:".MAIN_ROUT.$path);
        }
    }

?>