<?php
	// abstract class
	abstract class A
	{
		// lop truu tuong
		// hoan toan duoc phep dinh nghia thuoc tinh
		public  $age = 20;
		protected $money = 200;
		private $name = 'Van Teo';
		
		// co 2 loai phuong thuc
		// phuong thuc abstract -  bat buoc phai la phuong thuc rong
		public abstract function check();
		public abstract function test();
		protected abstract function exp3();
		// phuong thuc khong phai abstract
		public function exp4()
		{
			return $this->name;
		}
	}
	//$a = new A; // sai - khong dc phep khoi tao doi tuong
	
	abstract class C extends A
	{
		public abstract function exp5();
	}

	class B extends C
	{
		public function exp5()
		{
		}
		public function check()
		{
		}
		public function test()
		{
			return $this->money;
		}
		protected function exp3()
		{
		}
	}
	class D extends B
	{
	
	}
	$b = new B;
	echo $b->test();
	echo "<br>";
	echo $b->exp4();
