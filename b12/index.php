<?php
	class Demo
	{
		// cac phuong magic trong oop
		public function __construct($name, $age)
		{
			echo "This is method " . __FUNCTION__;
			echo "<br/>";
			echo "my name {$name} - my age {$age}";
			echo "<br/>";
			// __FUNCTION__ : tra ve ten phuong thuc (ham) dang lam viec
			// magic method __construct se tu dong chay dau tien khi khoi tao doi tuong cho 1 class
		}
		
		public function __destruct()
		{
			echo "<br/>";
			echo "This is method " . __FUNCTION__ . __CLASS__;
			// magic method luon luon tu dong chay cuoi cung
			// __CLASS__ const tra ve ten class hoac bao gom ca namespace neu co
		}
		
		public function __call($name, $arguments)
		{
			echo "<br/>";
			echo "This is __call " . $name;
			print_r($arguments);
			echo "<br/>";
			// magic method nay se tu dong chay khi truy cap vao 1 phuong thuc khong ton tai trong class
		}
		
		public static function __callStatic($name, $arguments)
		{
			echo "<br/>";
			echo "This is __callStatic " . $name;
			print_r($arguments);
			echo "<br/>";
			// magic method se tu dong chay khi truy cap vao mot method static khong ton tai trong class
		}
		
		public function __get($name)
		{
			//$name : ten thuoc tinh ma ben ngoai class truy cap bat hop hop phap - thuoc tinh do khong ton tai
			echo "<br/>";
			echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class";
			echo "<br/>";
		}
		
		public function __set($name, $value)
		{
			//$name : ten thuoc tinh ma ben ngoai class truy cap bat hop hop phap - thuoc tinh do khong ton tai
			// $value : gia tri gan cho thuoc tinh do
			echo "<br/>";
			echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class - gia tri cua thuoc tinh ban vua gan la : {$value}";
			echo "<br/>";
		}
		
		public function check()
		{
			echo "This is method " . __FUNCTION__;
		}
		
		public function test($a = null)
		{
			echo "This is method " . __FUNCTION__;
		}
	}
	$demo = new Demo('Van Ty', 20); // __construct se chay
	$demo->test(10);
	$demo->check();
	$demo->money(1,2,3); // __call se chay vi khong ton tai method money trong class
	Demo::loving(1,2,3); // __callStatic se chay vi khong ton tai method static loving trong class
	$demo->age; // ro rang thuoc tinh age ko ton tai trong class
	$demo->name = 'Nguyen Van Teo';
	
