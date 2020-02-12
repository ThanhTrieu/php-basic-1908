<?php
	namespace b12\models;
	
	class User
	{
		public function getAllDataUsers()
		{
			return [
				[
					'id' => 1,
					'username' => 'vanteo',
					'age' => 20
				],
				[
					'id' => 2,
					'username' => 'vanty',
					'age' => 21
				]
			];
		}
	}