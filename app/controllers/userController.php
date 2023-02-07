<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\models\userModel;
    use itrax\core\Helper;
    class userController extends Controller{
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
            $user_object = new userModel;
            $user_data = $user_object->getUserDetails(['email'=>$email, 'password'=>$password]);
            if(!empty($user_data)){
                $_SESSION['user'] = $user_data;
                unset($_SESSION['errors']["login"]);
                Helper::redirect("user/index");
            }
            else{
                $_SESSION['errors']['login'] = 'Username or Password is not correct.';
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