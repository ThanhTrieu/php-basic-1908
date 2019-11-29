<?php
// tiep tuc cac kien thuc lam viec voi mang trong php
// cac ham xu ly voi mang trong php
$infoSt = [
	'name' => 'van teo',
	'age' => 20,
	'address' => 'Ha Noi'
];

$infoCat = [
	'NAME' => 'abc',
	'AGE' => 2
];
// chuyen key cua mang ve chu thuong hoac chu hoa (luu y: chi xu ly voi key cua mang)
$infoSt = array_change_key_case($infoSt, CASE_UPPER); // CASE_UPPER == 1
echo "<pre>";
print_r($infoSt);

$infoCat = array_change_key_case($infoCat, CASE_LOWER); // CASE_LOWER == 0
print_r($infoCat);

$arrNumber = [1,2,1,1,2,3,3,4,5,2,3,4];
// dem so luong phan tu giong nhau trong mang (ket qua se tra ve 1 mang moi)
// mang moi tra ve : key chinh la gia tri cua cac phan tu trong mang ban dau, con value cua mang moi chinh la so lan xuat hien cua cac phan tu trong mang ban dau
$count = array_count_values($arrNumber);
print_r($count);

// them 1 phan tu vao cuoi mang
array_push($arrNumber, 100);
print_r($arrNumber);

// xoa 1 phan tu o cuoi mang - tra ve phan tu bi xoa do
$lastEl = array_pop($arrNumber);
echo $lastEl;
echo "<br>";
print_r($arrNumber);

// them 1 phan tu vao dau mang
array_unshift($arrNumber, $lastEl);
print_r($arrNumber);

// xoa phan tu o dau mang
$firstEl = array_shift($arrNumber);
echo $firstEl;
echo "<br>";
print_r($arrNumber);

// tach mang thanh cac mang con
// tham so thu 2 : chinh la so luong phan tu nam trong mang con
$childArray = array_chunk($arrNumber, 3);
print_r($childArray);

// kiem tra 1 bien co phai la mang hay ko ? (kiem tra kieu du lieu)
if(is_array($childArray)){
	echo "yes";
} else {
	echo "No";
}
echo "<br>";

// kiem tra 1 phan tu co nam trong mang hay ko?
$fruit = ['cam', 'tao', 'mit', 1,2,3,4];
if(in_array('mit', $fruit)){
	echo "Co ton tai trong mang";
} else {
	echo "ko co trong mang";
}
echo "<br>";


$infoPerson = [
	'name' => 'van teo',
	'age' => 20,
	'address' => 'Ha Noi'
];
// kiem tra xem key(chi so phan tu) co nam trong mang ko?
if(array_key_exists('money', $infoPerson)){
	echo "Dung";
} else {
	echo "Sai";
}
echo "<br>";

// loai bo cac phan tu giong nhau trong mang
$arrNumber2 = [1,1,2,2,3,3,4,4,5,5,6,7,8,9];
$newArray = array_unique($arrNumber2);
print_r($newArray);

// bien mang khong tuan tu ve mang tuan tu(tac dong vao key cua mang)
$infoPerson = array_values($infoPerson);
print_r($infoPerson);

// tinh tong cac phan tu trong mang (luu y: cac phan tu phai la so)
$sum = array_sum($arrNumber2);
echo $sum;
echo "<br>";

// tach mang con tu mang cha cho truoc
$arrNumber3 = [1,2,3,4,5,6,7,8,9,10,11,12];
$child = array_slice($arrNumber3, 3, 5, false);
print_r($child);

// thay the cac phan tu trong mang, tra ve mang moi bao gom cac phan tu da dc thay the
array_splice($arrNumber3, 3, 3, [100,200,300]);
print_r($arrNumber3);

// lay ra phan tu cuoi cung cua mang - nhung khong xoa phan tu ra khoi mang
$endEl = end($arrNumber3);
echo $endEl;
echo "<br>";
print_r($arrNumber3);

// sap xep cac phan tu trong mang
$arrNumber4 = [100,99,1,5,10,9,6,7,90];
//asort($arrNumber4); // sap xep tang dan
arsort($arrNumber4); // sap xep giam dan
// sap xep dua vao gia tri phan tu nam trong mang
print_r($arrNumber4);

// sap xep mang dua vao key
$arrData = [
	'mot' => 1,
	'hai' => 2,
	'ba' => 3,
	'bon' => 4,
	'nam' => 5
];
//ksort($arrData); // sap xep tang dan
krsort($arrData); // sap xep giam dan
print_r($arrData);

$arrNumber5 = [100,99,1,5,10,9,6,7,90];
function sapXepMang($arr)
{
	foreach ($arr as $key => $val) {
		foreach ($arr as $k => $item) {
			if($arr[$key] < $arr[$k]){
				$tg = $arr[$key];
				$arr[$key] = $arr[$k];
				$arr[$k] = $tg;
				
			}
		}
	}
	return $arr;
}
$newArray = sapXepMang($arrNumber5);
print_r($newArray);

// [100,99,1,5,10,9,6,7,90];
function timKiemPhanTu($a, $arr)
{
	$check = false;
	foreach ($arr as $key => $item) {
		if($item == $a){
			//return true;
			$check = true;
			break;
		}
	}
	return $check;
	//return false;
}
echo "<br>";
if(timKiemPhanTu(5, $arrNumber5)){
	echo "Ton tai";
} else {
	echo "Khong ton tai";
}
echo "<br>";

$url = "https://vnexpress.net/the-gioi/16-tieng-trump-bi-mat-den-afghanistan-4019635.html";
$url2 = "https://vnexpress.net/the-gioi/tang-lop-thia-dat-tuyet-vong-trong-xa-hoi-han-quoc-4018216.html";

// viet ham lay ra id bai viet
function getIdUrl($myUrl)
{
	// bien chuoi ve mang
	$arrUrl = explode('-', $myUrl);
	// lay ra phan tu cuoi cung cua mang
	$stringId = end($arrUrl);
	// lay so id(so nguyen) trong chuoi
	$id = intval($stringId);
	return $id;
}
$id = getIdUrl($url2);
echo $id;










