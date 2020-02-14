<?php
	namespace app\model;
	
	class Product
	{
		public function getAllProduct()
		{
			return [
				[
					'id' => 1,
					'name' => 'Iphone',
					'price' => 1200
				],
				[
					'id' => 2,
					'name' => 'Samsung',
					'price' => 1000
				]
			];
		}
	}
