<?php
	declare(strict_types=1);
	// giup thong bao loi khi lam viec voi cac phien ban php 7 tro len
	
	// dinh nghia ham voi tieu chuan phien php 7 tro len - nghia cac phien ban php thap hon se khong ho tro cac cu phap nay

	function totalNumber(float $a, int $b) : float
	{
		return $a + $b;
	}
	
	$kq = totalNumber(1.2,2);
	echo $kq;
	
	// viet ham theo php 7 tinh giai thua cua 1 so
	function tinhGiaiThua( int $n) : int {
		if($n < 0){
			return 0;
		}
		if($n == 0 || $n == 1){
			return 1;
		}
		$gt = 1;
		for ($i = 2; $i <= $n; $i++) {
			$gt *= $i;
		}
		return $gt;
	}