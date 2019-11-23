<?php
// cac kien thuc lam viec voi chuoi trong php
// kieu du lieu : string
$myString = 'This class php1908e';
echo gettype($myString); // kiem tra kieu du lieu
echo "<br>";
// khi khai bao chuoi trong php thi phai dat trong dau nhay don hoac nhay kep
// khi trong chuoi khong chu bien thi ta nen dung nhay don, nguoc lai khi trong chuoi co chua bien thi nen dung nhay kep
// toan tu noi chuoi trong php la dau .
$myString2 = 'hom nay la thu 6 ';
$myString3 = 'Ngay mai se la  thu 7';
echo  $myString2 . $myString3;
echo "<br>";

$number = 3;
$myString4 = "1 cong 2 bang {$number}"; // cu phap khi viet bien nam trong chuoi
echo $myString4;
echo "<br>";

$myString5 = '1 cong 2 bang {$number}';
echo $myString5;
echo "<br>";

// bao dau nhay don trong nhay don - hoac bao dau nhay kep trong dau nhay kep
$myString6 = "Hom thu 3 \"Viet Nam\" hoa 'Thai Lan' ";
echo $myString6;
echo "<br>";
// khi dau nhay kep bao lay nhay kep hay nhay don bao lay nhay don thi can co dau \ dung dang truoc
// con nhay don bao nhay kep hay nhay kep bao nhay don thi su dung binh thuong

/****************** Cac ham xu ly voi chuoi trong php **************************/

//1 - bien chuoi ve mang
$fruit = 'tao cam quyt mit dua';
$arrFruit = explode(' ', $fruit);
print_r($arrFruit);
echo "<br>";
// bien mang ve chuoi
$fruit2 = implode(',', $arrFruit);
echo  $fruit2;
echo "<br>";

// dem so ky tu nam trong chuoi
$nameClass = "LPHP1908E";
echo strlen($nameClass);
echo "<br>";

$myName = "triều";
//echo strlen($myName);
echo mb_strlen($myName);
echo "<br>";

// dem so tu trong cau (nen dung khong co dau )
$string = "Sắp được nghỉ tết rồi";
echo str_word_count($string);
echo "<br>";

// lap lai chuoi
echo str_repeat($string, 3);
echo "<br>";

// tim kim thay the chuoi
$string2 = 'sap duoc nghi he roi, he nay buon lam';
$newString = str_replace('he', 'tet', $string2);
echo $newString;
echo "<br>";

// ma hoa chuoi
$password = "khongcodau";
$password2 = "khongcodau";
echo md5($password); // ma hoa thanh chuoi 32 ki tu va khong giai ma lai duoc
echo "<br>";
echo md5($password2);
echo "<br>";

$html = "<script>alert('Hello you')</script>";
echo htmlentities($html);
echo "<br>";

$html2 = htmlentities($html);
//echo html_entity_decode($html2);
echo "<br>";

$tag = "<h1><i>This is tag HTML</i></h1>";
//echo strip_tags($tag,'<i>');
echo strip_tags($tag); // xoa tat cac the html trong  chuoi
echo "<br>";

$subStr = "bao gio cho den ngay mai, ngay mai se den ngay mai";
// tach chuoi tu vi tri , cho toi do dai cua chuoi can tach
$childStr = substr($subStr, 3, 5);
echo $childStr;
echo "<br>";

// tach chuoi tu ki tu cho truoc
echo strstr($subStr, 'den');
echo "<br>";

$string7 = "Bao gio duoc nghi tet ?";
$pos = strpos($string7, '?');
if($pos !== false){
	// tim thay
	echo $pos;
} else {
	// khong tim thay
	echo 'not found';
}
echo "<br>";
// cho url : trong url .html luon luon dung cuoi va trong url ko bao gio co dau . trong phan noi dung link
$url = "http://www.abc.com/hom-hay-troi-lanh.html";
$url2 = "http://www.abc.com/hom-hay-troi-lanh.php";
// lay ra phan mo rong (duoi) cua url : .html
function findExtensionUrl($ex, $url)
{
	$find = strpos($url, $ex);
	if($find !== false){
		$val = substr($url, $find, strlen($ex));
		return $val;
	}
	return '';
}

$ex = findExtensionUrl('.html', $url2);
echo $ex;
echo "<br>";

$trimStr = "*** Hello You ";
echo trim($trimStr); // khong co tham so thu hai se hieu la xoa khoang trang hai dau cua chuoi.
echo "<br>";
echo ltrim($trimStr, '*');





