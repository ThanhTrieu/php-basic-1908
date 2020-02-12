<?php
	namespace b12\controllers;
	require 'models/User.php';
	use b12\models\User;
	
	class Home
	{
		public function index()
		{
			// nhiem goi ham getAllDataUsers trong nay
			$user = new User;
			$data = $user->getAllDataUsers();
			echo "<pre>";
			print_r($data);
		}
	}
