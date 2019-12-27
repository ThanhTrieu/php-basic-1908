<?php
// oop - php
class A
{
	private $a = 10;
	private $b = 20;
	
	public function sum()
	{
		return $this->a + $this->b;
	}
	
	public static function kiemTraChanLe()
	{
		if((new A)->sum() % 2 == 0){
			return true;
		}
		return false;
	}
	
	public function checking()
	{
		// return $this->kiemTraChanLe();
		return self::kiemTraChanLe();
		// return A::kiemTraChanLe();
	}
	
	public static function checking2()
	{
		return self::kiemTraChanLe();
		// return $this->kiemTraChanLe(); //sai
	}
}
$ob = new A;
$sum = $ob->sum();
echo $sum;
echo "<br>";

$chk = A::checking2();
if($chk){
	echo "So chan";
} else {
	echo "So le";
}
	
echo "<br>";
$test = $ob->checking();
var_dump($test);

