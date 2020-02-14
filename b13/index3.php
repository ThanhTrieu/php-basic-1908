<?php
	// trait trong php
	trait Dog
	{
		// khai bao thuoc tinh
		public $name = 'Milu';
		protected $age = 2;
		private $weight = 5;
		
		public function getName()
		{
			return $this->name;
		}
		protected function getAge()
		{
			return $this->age;
		}
	}
	
	trait Cat
	{
		public function getName()
		{
			return 'Jex';
		}
		protected function getAge()
		{
			return 3;
		}
	}
	
//	trait snake implements Dog
//	{
//
//	}
	
	class A
	{
		// su dung trait
		use Dog, Cat {
			// conflict trait
			Cat::getName insteadof Dog; // su dung getName cua CAT
			
			Dog::getAge as getAgeDog; // doi ten phuong thuc
			Dog::getAge insteadof Cat; // su dung getAge cua DOG
		}
		public function showWeight()
		{
			return $this->weight;
		}
		public function showAge()
		{
			//return $this->getAge(); // DOG ?? CAT
			//return $this->getName(); // DOG ?? CAT
			return $this->getAgeDog();
		}
	}
	$a = new A;
	echo $a->showWeight();
	echo "<br/>";
	echo $a->name;
	echo "<br/>";
	echo $a->showAge();
