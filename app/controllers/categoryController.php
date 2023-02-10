<?php 
    namespace itrax\controllers;
    use itrax\core\Controller;
    use itrax\core\Helper;
    use itrax\models\CategoryModel;
    class CategoryController extends Controller{
        private $category;
        public function __construct()
        {
            $this->category = new CategoryModel;
        }
        public function add(){
            $this->checkLogin();
            return $this->view("category/add");
        }
        public function addHandler(){
            $this->checkLogin();
            if(isset($_POST['name'])){
                $this->category->addCategory($_POST['name']);
                Helper::redirect('category/index');
            }
            else{
                Helper::redirect("category/add");
            }
        }
        public function index(){
            $this->checkLogin();
            $categories = $this->category->getAllCategories();
            return $this->view("category/index", ['categories'=>$categories]);
        }
        public function delete($id){
            $this->checkLogin();
            $this->category->deleteCategory($id);
            Helper::redirect("category/index");
        }
        public function update($id){
            $this->checkLogin();
            $category = $this->category->getCategory(3);
            return $this->view("category/update", ['category'=>$category]);
        }
        public function updateHandler(){
            $this->checkLogin();
            $data = ['id' => $_POST['id'], 'name'=>$_POST['name']];
            $this->category->updateCategory($data);
            Helper::redirect('category/index');
        }
    }


?>