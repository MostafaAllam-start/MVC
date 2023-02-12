<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\models\UserModel;
    use itrax\core\Helper;
    class UserController extends Controller{
        public function index(){
            session_start();
            if(!isset($_SESSION['user'])){
                Helper::redirect('user/login');
            }
            return $this->view("users\\user");
        }
        public function login(){
            session_start();
            if(isset($_SESSION['user'])){
                $this->logout();
            }
            return $this->view('users\\login');
        }
        public function loginHandler(){
            session_start();
            $email = $_POST['email'];
            $password = $_POST['password'];
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