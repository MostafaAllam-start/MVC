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
            $this->checkLogin();
        }
        public function add(){
            return $this->view("category/add");
        }
        public function addHandler(){
            if(isset($_POST['name'])){
                $this->category->addCategory($_POST['name']);
                Helper::redirect('category/index');
            }
            else{
                Helper::redirect("category/add");
            }
        }
        public function index(){
            $categories = $this->category->getAllCategories();
            return $this->view("category/index", ['categories'=>$categories]);
        }
        public function delete($id){
            $this->category->deleteCategory($id);
            Helper::redirect("category/index");
        }
        public function update($id){
            $category = $this->category->getCategory($id);
            return $this->view("category/update", ['category'=>$category]);
        }
        public function updateHandler(){
            $data = ['id' => $_POST['id'], 'name'=>$_POST['name']];
            $this->category->updateCategory($data);
            Helper::redirect('category/index');
        }
    }


?>