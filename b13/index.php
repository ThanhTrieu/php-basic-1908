<?php
	// dinh nghia interface oop php
	interface Demo
	{
		// khong duoc dinh nghia thuoc tinh
		// duoc phep khai phuong thuc nhung chi o che do public - phuong thuc phai la phuong thuc rong
		public function Test(); // phuong thuc rong
		public function Check();
	}
	
	// interface ke thua interface
	interface Examples extends Demo
	{
		public function exp();
	}
	
	// mot class ke thua 1 interface lam ntn ?
	class A implements  Examples
	{
		// vi class A ke thua interface Demo nen class A phai override toan bo cac phuong thuc cua interface
		public function Test()
		{
			echo "This is method " . __FUNCTION__;
		}
		
		public function Check()
		{
			echo "This is method " . __FUNCTION__;
		}
		
		public function exp()
		{
			echo "This is method " . __FUNCTION__;
		}
	}
	
	class B extends A
	{
		public function exp2()
		{
			echo "This is method " . __FUNCTION__;
		}
	}
	// khong the khoi tao doi tuong cho interface
	$a = new A;
	$b = new B;
	$a->Test();
	echo "<br/>";
	$b->exp2();
