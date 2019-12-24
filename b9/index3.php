<?php
// bieu thuc chinh quy trong php
// cu phap
$inputString = "dang hoc php"; // co tu php nam trong chuoi ko?
// xay dung 1 bieu thuc chinh kiem tra dieu kien do
$btcq = "/[Aa-zZ]/"; // // chinh la cu phap cua bieu thuc chinh quy - tat ca nhung gi nam ben trong no deu la cac cu phap khac cua bieu thuc chinh quy
// lam the nao de biet bieu chinh quy co so khop - hay dien dat dung yeu cau ko?

if(preg_match($btcq, $inputString)){
	echo "yes";
} else {
	echo "No";
}

$number = "abc212";
$btcq2 = "/^[Aa-zZ]{3,}./";

echo "<br>";
if(preg_match($btcq2, $number)){
	echo "OK";
} else {
	echo "ERR";
}
echo "<br>";

// kiem tra 1 so co phai la 5 chu va chia cho 5 ko?
$chkNumber = '/^[1-9][0-9]{3}[0,5]$/';
$number = '12345';
if(preg_match($chkNumber, $number)){
	echo "Dung";
} else {
	echo "Sai";
}
$chkNumber2 = '/^[1,3,5,7,9][^1,3,5,7,9][0-9][0,5]$|^[1,3,5,7,9][^1,3,5,7,9][0,5]$/';
$tring = "Sap dc ve roi. Tao doi qua";
$chk = "/\./";

// viet bieu thuc chinh quy kiem tra so dien thoai di dong cua nha mang viettel
$checkNumberPhone = '/^(09[6-8]|086|03[2-9])\d{7}$/';
$phone = '0975091304';
if(preg_match($checkNumberPhone, $phone, $macth)){
	echo "<pre>";
	print_r($macth);
} else {
	echo "khong phai so dien thoai viettel";
}
// viet bieu thuc chinh quy kiem tra dinh dang ngay thang
// dd/mm/yyyy
// 01-02-1992
// 21/1/2019
// 29/02/2019
$checkFormatDate = '/^(0[1-9]|[1,2]\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';
$inputDate = '29/02/2019';
if(preg_match($checkFormatDate, $inputDate, $macth)){
	$month = (int) $macth[2];
	$day = (int) $macth[1];
	$year = (int) $macth[3];
	
	// xu ly cho thang 2
	if($month === 2){
		// kiem tra xem nam co phai nam nhuan ko?
		if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0) ) {
			if($day > 29){
				echo "dinh dang ngay thang ko dung";
			} else {
				echo "dinh dang ngay thang dung";
			}
		} else {
			if($day > 28){
				echo "dinh dang ngay thang ko dung";
			} else {
				echo "dinh dang ngay thang dung";
			}
		}
	}
	
} else {
	echo "Dinh dang ngay thang ko dung";
}

// viet bieu thuc chinh quy kiem tra chuoi ko co khoag trang (phim space)
$myStringTest = 'adassasKK';
$test = '/^\w*$/';
echo "<br>";
if(preg_match($test, $myStringTest)){
	echo "OK";
} else {
	echo "ERR";
}
echo "<br>";

// viet bieu thuc chinh quy : kiem tra chuoi : 8 ki tu tro len - it nhat 1 chu thuong, it nhat 1 chu hoa, it nhat 1 so
$expression = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]+)\w{8,}$/';
$password = 'DASDASDAS3343SASASSASFssas';
if(preg_match($expression, $password, $macth)){
	echo "<pre>";
	print_r($macth);
} else {
	echo "No";
}