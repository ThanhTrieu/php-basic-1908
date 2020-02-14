<?php
	namespace app\controller;
	
	// su dung model
	use app\model\Home;
	use app\model\Product;
	
	class HomeController
	{
		private $homeModel;
		private $pdModel;
		
		public function __construct()
		{
			$this->homeModel = new Home();
			$this->pdModel = new Product();
		}
		public function index()
		{
			$data = $this->homeModel->getAllData();
			echo "<pre>";
			print_r($data);
		}
		public function products()
		{
			$data = $this->pdModel->getAllProduct();
			echo "<pre>";
			print_r($data);
		}
	}
