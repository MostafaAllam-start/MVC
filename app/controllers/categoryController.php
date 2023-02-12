<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\core\Helper;
    use itrax\models\CategoryModel;
    class CategoryController extends Controller{
        private $category;
        private $viewpath;
        public function __construct()
        {
            $this->category = new CategoryModel;
            $this->viewpath = 'dashboard/category/';
            $this->checkLogin();
        }
        public function add(){
            return $this->view($this->viewpath."add");
        }
        public function addHandler(){
            if(isset($_POST['name'])){
                $this->category->addCategory($_POST['name']);
                $_SESSION['success'] = 'The category is added successfully.';
                Helper::redirect($this->viewpath."index");
            }
            else{
                Helper::redirect($this->viewpath."add");
            }
        }
        public function index(){
            $categories = $this->category->getAllCategories();
            return $this->view($this->viewpath."index", ['categories'=>$categories]);
        }
        public function delete($id){
            $this->category->deleteCategory($id);
            $_SESSION['success'] = 'The category is deleted successfully.';
            Helper::redirect($this->viewpath."index");
        }
        public function update($id){
            $category = $this->category->getCategory($id);
            return $this->view($this->viewpath."update", ['category'=>$category]);
        }
        public function updateHandler(){
            $data = ['id' => $_POST['id'], 'name'=>$_POST['name']];
            $this->category->updateCategory($data);
            $_SESSION['success'] = 'The category is updated successfully.';
            Helper::redirect($this->viewpath.'index');
        }
    }


?>