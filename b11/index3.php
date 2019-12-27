<?php
// oop

class A
{
	private $name = 'Van Teo';
	
	public function getName()
	{
		return $this->name;
	}
}

class B extends A
{
	private $name = 'Thi No';
	
	// override - ghi de (tinh da hinh)
	public function getName()
	{
		return $this->name;
	}
	
	public function Hello()
	{
		return parent::getName();
	}
}
$b = new B;
$name = $b->Hello();
echo $name;