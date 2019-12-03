<?php
// kiem tra nguoi dung da bam button sum chua (co me thod post gui len hay ko)
if(isset($_REQUEST['btnSum'])){
	$hsa = $_REQUEST['number1'] ?? 0;
	$hsa = is_numeric($hsa) ? $hsa : '';
	
	$hsb = $_REQUEST['number2'] ?? 0;
	$hsb = is_numeric($hsb) ? $hsb : '';
	
	// lay du lieu tu the select option
	$gender = $_REQUEST['gender'] ?? '';
	//echo $gender;
	//die(); // dung chuong trinh - khong chay cac lenh ben duoi
	$checkbox = $_REQUEST['agree'] ?? '';
	//echo $checkbox;
	
	$radio = $_REQUEST['radioCheck'] ?? '';
	echo $radio;
	die;
	
	if(empty($hsb) || empty($hsa)){
		echo "vui long nhap so";
	} else {
		$sum = $hsb + $hsa;
		echo $sum;
	}
}
