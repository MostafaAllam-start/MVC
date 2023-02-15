<?php
    namespace itrax\models;
    use itrax\core\db;

    class RoleModel extends db{

        public function getAllRoles(){
            return $this->selectAll();
        }
    }
?>