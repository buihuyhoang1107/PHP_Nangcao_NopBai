<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Category();
		}

		public function list(){
			$data = array();
            $data = $this->cate_model->All();
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
			require_once('views/category/list.php');
		}
		public function detail(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$cate = $this->cate_model->find($id);
			//var_dump($cate);
			require_once('views/category/detail.php');
		}

		public function add(){
			
			require_once("views/category/add.php");
			
		}
		public function store(){	
			$data = array();
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];

			$status = $this->cate_model->store($data);
			var_dump($status);
			
		}
		
	}
 ?>