<?php
// hoc cach dinh nghia ham trong php
// 1 - dinh nghia theo chuan cho moi version php (phien ban nao cung co the chay dc)
// cu phap : function nameFunction (params) {}
function kiemTraChanLe($number = 10)
{
	// tu khoa function : keyword (bat buoc viet dung)
	// kiemTraChanLe : ten ham (do lap trinh vien tu dinh  nghia)
	// $number :tham so truyen vao ham (khong nhat thiet bat buoc - tuy vao tung ung dung) - Tham so hinh thuc (tham so truyen vao khi ham dang dc dinh nghia)
	// gan gia tri mac dinh cho tham so - gia tri nay se co hieu luc khi ko ton tai tham so thuc truyen vao khi goi ham ra su dung va nguoc lai no se khong co hieu luc khi ton tai tham so thuc truyen vao ham khi goi ham ra su dung
	
	// than ham - xu ly cac logic
	if($number % 2 == 0){
		return true;
	}
	return false;
	// tu khoa return : tra ket qua ve cho ham - va se thoat khoi ham , cac cau lenh ben duoi se ko duoc thuc thi
	// tuy truong hop co the hoac ko co tu khoa return
}

// goi ham ra su dung : goi ten ham va truyen tham so vao neu co
$checking = kiemTraChanLe(); // 10 : tham so thuc - tham so truyen vao ham khi goi ham ra su dung
if($checking){
	echo "So chan";
} else {
	echo "So le";
}

// viet ham kiem tra so nguyen to
function kiemTraSoNguyenTo($n)
{
	if($n <= 1){
		return false;
	}
	
	if($n == 2){
		return true;
	}
	
	for ($i = 2; $i <= sqrt($n); $i++) {
		if($n % $i == 0){
			return false;
		}
	}
	return true;
}

$a = 21;
$test = kiemTraSoNguyenTo($a);
if($test){
	echo " {$a} la so nguyen to";
} else {
	echo " {$a} khong la so nguyen to";
}
echo "<br>";

// tu 1 toi 100 co bao nhieu so chinh phuong
function kiemTraSoChinhPhuong($n)
{
	$check = (int) sqrt($n);
	// kiem tra so nguyen
	if($check * $check == $n){
		return true;
	}
	return false;
}

function demSoChinhPhuong($i, $j)
{
	// duyet tu 1 toi 100
	$count = 0;
	for ($k = $i ; $k <= $j; $k++) {
		if(kiemTraSoChinhPhuong($k)){
			$count++;
		}
	}
	return $count;
}

$kq = demSoChinhPhuong(1,100);
echo  $kq;

////////////////////////////////////////////////////
// bien cuc bo - bien khai bao trong ham - pham vi hoat dong chi nam trong ham
// bien toan cuc la bien khai bao ngoai ham
// su dung bien toan cuc vao trong ham ntn ?

$x = 100; // bien toan cuc
function totalNumber($y)
{
	$a = 10;
	// $x bien cuc bo cua ham ko lien quan den bien $x ben ngoai
	// su dung $x toan cuc ben ngoai vao ham
	global $x; // bao hieu $x la bien toan cuc o ben ngoai goi vao ham
	return $x + $y;
}

$total = totalNumber(10);
echo $total;
echo "<br>";

////////////////////////////////////////////////
// Bien Tinh trong ham php
function kiemTraBienStatic()
{
	static $demo = 0;
	$demo++;
	echo $demo;
	echo "<br>";
}
kiemTraBienStatic();
kiemTraBienStatic();
kiemTraBienStatic();
kiemTraBienStatic();
////////////////////////////////////////////////////
// tham tri - bien truyen vao ham - di ra khoi ham khong bi thay doi gia tri

$thamTri = 100;
function testThamTri($x)
{
	return $x += 10;
}
echo $thamTri;
echo "<br>";
echo testThamTri($thamTri);
echo "<br>";
echo $thamTri;
echo "<br>";

// Tham chieu - tham bien : bien truyen vao ham di ra khoi ham bi thay doi gia tri theo logic xu ly trong ham
$thamChieu = 100;
function testThamChieu(&$y)
{
	// &$y : tham chieu den bien $y
	return $y += 20;
}
echo $thamChieu;
echo "<br>";
echo testThamChieu($thamChieu);
echo "<br>";
echo $thamChieu;
