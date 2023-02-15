<?php
    namespace itrax\controllers;
    use itrax\core\Helper;
    use itrax\core\Controller;
    use itrax\models\PostModel;
    use itrax\models\UserModel;
    use itrax\models\CategoryModel;
    class PostController extends Controller{
        private $postModel;
        private $userModel;
        private $categoryModel;
        private $currentTime;
        private $viewpath;
        public function __construct()
        {
            $this->checkLogin();
            $this->postModel = new PostModel();
            $this->userModel = new UserModel();
            $this->categoryModel = new CategoryModel();
            $this->currentTime = time();
            $this->viewpath = "dashboard/posts/";
        }
        public function index(){
            $posts = $this->postModel->getAllPosts();
            $this->view($this->viewpath."index",["posts"=>$posts]);
        }
        public function add(){
            $users = $this->userModel->getAllUsers();
            $categories = $this->categoryModel->getAllCategories();
            $this->view($this->viewpath."add",["users"=>$users, "categories"=>$categories]);
        }
        public function addHandler(){
            if(isset($_POST['submit'])){
                $img = $this->currentTime.$_FILES["img"]["name"];
                $tempname = $_FILES["img"]["tmp_name"];
                $folder = UPLOADED_IMGES_PATH . $img;
                if(strlen($img) != 0 && strlen($tempname) != 0){
                    $this->postModel->addPost($_POST['title'], $_POST['description'], $img, $_POST['user'], $_POST['category']);
                    if(!move_uploaded_file($tempname, $folder)){
                        $_SESSION['error']= "There was a problem while uploading the image.";
                    }
                    else{
                        $_SESSION['success'] = "The post is added successfully.";
                    }
                    Helper::redirect('post/index');
                }
            }
        }
        public function update($id){
            $users = $this->userModel->getAllUsers();
            $categories = $this->categoryModel->getAllCategories();
            $post = $this->postModel->getPostDetails($id);
            $this->view($this->viewpath."update",["users"=>$users, "categories"=>$categories, "post"=>$post]);
        }
        public function updateHandler(){
            if(isset($_POST['submit'])){
                unset($_POST['submit']);
                if(isset($_FILES['img']) && $_FILES['img']['size'] != 0){
                    $img = $this->currentTime.$_FILES["img"]["name"];
                    $tempname = $_FILES['img']['tmp_name'];
                    $folder = UPLOADED_IMGES_PATH . $img;
                    $_POST['img'] = $img;
                    if(!move_uploaded_file($tempname, $folder)){
                        $_SESSION['error'] = "There was a problem while uploading the image.";
                    }
                    else{
                        $_SESSION['success'] = "The post is Updated successfully.";
        
                        $old_img = UPLOADED_IMGES_PATH . $this->postModel->getPostDetails($_POST['id'])['img'];
                        unlink($old_img);
                        $this->postModel->updatePost($_POST);
                        Helper::redirect('post/index');
                    }
                }

            }
        }
        public function delete($id){
            $old_img = UPLOADED_IMGES_PATH . $this->postModel->getPostDetails($id)['img'];
            unlink($old_img);
            $this->postModel->deletePost($id);
            $_SESSION['success'] = 'The post is deleted successfully.';
            Helper::redirect("post/index");   
        }
    }
?>