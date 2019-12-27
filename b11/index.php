<?php
// cac khai niem ve lap trinh huong doi tuong trong php
// 1- class
class Student
{
	// dinh nghia cac thuoc tinh (dac diem tinh chat cua doi tuong - thong thuong se bieu dien bang cac danh tu hoac tinh tu - cac bien)
	public $name = 'Van Teo';
	public $address = 'Ha Noi';
	
	private $single = true;
	private $money = 1000;
	
	protected $age = 20;
	public static $subject = 'OOP';
	
	// dinh nghia phuong thuc (cac hanh dong cua doi tuong - thong thuong se bieu dien bang cac dong tu - cac ham )
	public  function Study($name)
	{
		// xu ly cac logic o day
		return "dang hoc OOP {$name}";
	}
	public function eat()
	{
	
	}
	private function hocLai()
	{
	
	}
	
	function goSleep($time)
	{
		return " sleep at {$time}";
	}
}

class Teacher extends Student
{
	const PI = 3.14;
	
	protected $ranks = 'TK';
	public static $luong = 1000;
	public function getAge()
	{
		// hoan toan truy cap duoc
		return $this->age;
	}
	
	public function getRank()
	{
		// $this->getRank();
		return $this->ranks . ' -- ' .$this->getAge() . ' --- ' . $this->goSleep(22);
	}
	
	public function getNameSubject()
	{
		//return Teacher::$subject;
		return self::$subject . ' --- ' . self::PI;
	}
}

$teach = new Teacher;
$age = $teach->getAge();
$rank = $teach->getRank();
echo $age;
echo "<br>";
echo $rank;
echo "<br>";

$subject = Teacher::$subject;

$luong = Teacher::$luong;
echo $luong;
echo "<br>";

// truy cap vao thuoc tinh luong trong class Teacher

// 2 - object
$svCntt = new Student; // 1 doi tuong thuoc class Student
$svCoKhi = new Student; // 1 doi tuong khac
// truy cap vao thuoc tinh ben trong class
$myName = $svCntt->name; // truy cap vao thuoc tinh name
echo $myName;
echo "<br>";
//$myMoney = $svCoKhi->money; // sai vi thuoc tinh dc khai bao la private
//echo $myMoney;
$learning = $svCntt->Study('Javascript');
echo $learning;

echo "<br>";
$sleep = $svCntt->goSleep(23);
echo $sleep;

//echo "<br>";
//$myAge = $svCntt->age;
//echo $myAge;



