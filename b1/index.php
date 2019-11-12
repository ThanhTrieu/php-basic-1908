<?php
	// the mo cua php
	
	// the dong cua php
	// khi trong file chi chua ma lenh php thi khong can the dong - nguoc lai thi bat buoc cp the dong php
	
	// chuong trinh hello word dau tien
	echo "Hello word" . PHP_EOL;
	echo "<br>";
	
	// khai bao bien
	// su dung tu khoa $ dung dang truoc ten bien
	$myName = 'Nguyen Van Teo';
	// khong co khoang trang giua tu khoa $ va ten bien
	// $ age; sai
	// ten bien khong bao gio dc bat dau bang so
	// $1age; sai - vi bat dau bang so
	// myName - MyName - my_name
	$_age = 10;
	// khi khai bao bien khong can khai bao kieu du lieu cho bien - kieu du lieu se dc nhan khi gan gia tri cho bien
	// bien trong php phan biet chu hoa chu thuong
	$address = 'HN';
	$Address = 'HN';
	// 2 bien nay khac nhau hoan toan
	// de tranh truong hop xau nay thi viet style conversion cho bien thi dung 1 chuan thoi
	
	$a = 'hi'; // 1 bien binh thuong
	$b = 'a'; // gia tri duoc gan lai la ten cua 1 bien
	echo $$b; // tham chieu den gia tri cua bien duoc gan
	echo "<br>";
	
	$test = 'demo';
	$check = 'test1';
	//echo $$check; // ko co y nghia

	// dinh nghia hang so trong php
	// dung tu khoa define
	define('PI', 3.14);
	echo PI; // khong co tu khoa $ dung dang truoc khi no la hang so
	echo "<br>";
	const MY_COUNTRY = 'VN';
	echo MY_COUNTRY; // tat ca viet chu hoa va cach nhau boi dau gach duoi
	// const thi duoc phep khai bao hang so trong class - con define thi khong
	echo "<br>";

	// tieu hieu 1 so kieu du lieu co ban
	$number = 10;
	$number2 = 10.10;
	echo gettype($number) . '---' . gettype($number2);
	echo "<br>";
	var_dump($number);
	var_dump($number2);
	echo "<br>";
	
	$myString = 'dang hoc - ban roi nhe';
	var_dump($myString);
	echo "<br>";
	
	$x = 10;
	$y = '20'; // number string : trong chuoi chi chua so
	$z = $x+$y;
	// trong lap trinh thuc the nen chac chan la so hoac chuoi so thi moi thuc hien cac phep toan hoc
	//echo $z;
	echo gettype($z);
	echo "<br>";
	settype($z, 'string'); // chuyen doi kieu du lieu
	echo gettype($z);
	$z = (int)$z;
	echo "<br>";
	echo gettype($z);
	echo "<br>";
	
	$number3 = "12abc";
	$number4 = 123.123;
	//echo intval($number4);
	echo strval($number4);
	echo "<br>";
	
	$empty = ''; // day co phai la bien rong ko ?
	// $empty = false;
	//$empty = 0;
	// '' == false == 0 : ve mat gia tri
	if(empty($empty)){
		echo 'yes';
	} else {
		echo 'No';
	}
	echo "<br>";
	
	// trong php khong nen khai bao bien ma ko gan san du lieu
	$checkExist = null; // kiem tra bien co ton tai hay ko
	//echo gettype($checkExist);
	if(isset($empty)){
		echo 'Yes';
	} else {
		echo 'No';
	}
	echo "<br>";
	
	// kiem tra trong chuoi chi chua toan so hay ko?
	$numberString = '100.10';
//	if(is_numeric($numberString)){
//		echo "OK";
//	} else {
//		echo "ERR";
//	}
	if(is_string($numberString)){
		echo "OK";
	} else {
		echo "ERR";
	}
	echo "<br>";
	$number6 = 100;
	$number5 = $number6 ?? 9; //isset($number6) ? 10 : 9;
	echo $number5;
	echo "<br>";
	
	$number7 = 100;
	$number8 = 100;
	
	$compare = $number7 <=> $number8;
	echo $compare;
	
	if($number8 == 100){
	
	} else {
	
	}
	
	if($number7 == 10){
		// do something
	} elseif ($number7 == 9) {
		//
	} elseif ($number7 == 100) {
		//
	} elseif ($number7 == 101) {
	
	}
	else {
		//
	}
	
	switch ($number7) {
		case 10:
			//
			break;
		case 100:
			//
			break;
		case 101:
			//
			break;
		default:
			//
			break;
	}
 