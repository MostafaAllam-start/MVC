<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\models\UserModel;
    use itrax\models\RoleModel;
    use itrax\core\Helper;
    class UserController extends Controller{
        private $viewpath;
        private $model;
        public function __construct()
        {
            $this->model = new UserModel();
            $this->viewpath = "dashboard\\users\\";
        }
        public function index(){
            $this->checkLogin();
            $users = $this->model->getAllUsersDetails();
            return $this->view($this->viewpath."index", ['users'=>$users]);
        }
        public function add(){
            $this->checkLogin();
            $roleModel = new RoleModel();
            $roles = $roleModel->getAllRoles();
            return $this->view($this->viewpath."add", ['roles'=>$roles]);
        }
        public function addHandler(){
            $this->checkLogin();
            if(isset($_POST['submit'])){
                unset($_POST['submit']);
                $_POST['password'] = sha1($_POST['password']);
                $this->model->addUser($_POST);
                $_SESSION['success'] = "The user is added successfully.";
                Helper::redirect("user/index");
            }
        }
        public function update($id){
            $this->checkLogin();
            $user = $this->model->getAllUserDetails($id);
            $roleModel = new RoleModel();
            $roles = $roleModel->getAllRoles();
            return $this->view($this->viewpath.'update', ['user'=>$user, 'roles'=>$roles]);
        }
        public function updateHandler(){
            $this->checkLogin();
            if(isset($_POST['submit'])){
                unset($_POST['submit']);
                $_POST['password'] = sha1($_POST['password']);
                $this->model->updateUser($_POST);
                $_SESSION['success'] = "The user is updated successfully.";
                Helper::redirect("user/index");
            }
        }
        public function delete($id){
            $this->checkLogin();
            $this->model->deleteUser($id);
            $_SESSION['success'] = "The user is deleted successfully.";
            Helper::redirect("user/index");
        }
        public function login(){
            session_start();
            if(isset($_SESSION['user'])){
                $this->logout();
            }
            return $this->view($this->viewpath.'login');
        }
        public function loginHandler(){
            session_start();
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $user_object = new UserModel;
            $user_data = $user_object->getUserDetails(['email'=>$email, 'password'=>$password]);
            if(!empty($user_data)){
                $_SESSION['user'] = $user_data;
                unset($_SESSION['error']);
                Helper::redirect("user/index");
            }
            else{
                $_SESSION['error'] = 'Username or Password is not correct.';
                Helper::redirect("user/login");
            }
        }
        public function logout(){
            session_start();
            session_destroy();
            Helper::redirect("user/login");
        }
    }
?>