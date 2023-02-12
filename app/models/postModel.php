<?php
    namespace itrax\models;
    use itrax\core\DB;

    class PostModel extends DB{
        public function addPost($title, $description, $img, $user_id, $category_id){
            $this->insert(['title'=>$title, 'description'=>$description, 'img'=>$img, 'user_id'=>$user_id, 'category_id'=>$category_id]);
        }

        public function getAllPosts(){
            return $this->customSelect("SELECT * FROM post_details");
        }

        public function updatePost($data){
            $this->update($data);
        }

        public function deletePost($id){
            $this->delete($id);
        }

        public function getPostDetails($id){
            return $this->customSelect("SELECT `post`.`id`, `post`.`title`, `post`.`description`, `post`.`img`, `post`.`user_id`, `post`.`category_id`, `user`.`name` AS 'user_name', `category`.`name` AS 'category_name'
                                        FROM `post` 
                                        JOIN `user`
                                        ON `post`.`user_id` = `user`.`id`
                                        JOIN `category`
                                        ON `post`.`category_id` = `category`.`id`
                                        WHERE `post`.`id` = $id")[0];
        }
    }
?>