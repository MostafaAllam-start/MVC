<?php
    namespace itrax\models;
    use itrax\core\DB;
    

    class site_settingModel extends DB{
        public function getSettingValue($key){
            return $this->select(['site_key'=>$key])['site_value'];
        } 
        public function changeTheam($theam){
            return $this->execute("UPDATE `site_setting` SET `site_value`=:theam WHERE `site_key`='theam'", ['theam'=>$theam]);
        }
    }
?>