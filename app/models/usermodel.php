<?php 
    namespace itrax\models;
    use itrax\core\DB;
    class UserModel extends DB{
        function getAllUsers(){
            return $this->selectAll();
        }
        function getUserDetails($params){
            return $this->select($params);
        }
        public function getAllUserDetails($id){
            return $this->customSelect("SELECT `user`.`id`, `user`.`name`, `user`.`email`, `user`.`password`, `user`.`role_id`, `role`.`name` AS 'role_name'
                                        FROM `user` 
                                        JOIN `role`
                                        ON `user`.`role_id` = `role`.`id`
                                        WHERE `user`.`id` = $id")[0];
        }
        public function getAllUsersDetails(){
            return $this->customSelect("SELECT `user`.`id`, `user`.`name`, `user`.`email`, `user`.`password`, `user`.`role_id`, `role`.`name` AS 'role_name'
                                        FROM `user` 
                                        JOIN `role`
                                        ON `user`.`role_id` = `role`.`id`");
        }
        function addUser($data){
            $this->insert($data);
        }
        function updateUser($data){
            $this->update($data);
        }
        function deleteUser($id){
            $this->delete($id);
        }
    }
?>