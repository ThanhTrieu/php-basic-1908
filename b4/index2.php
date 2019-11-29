<?php
// cac kien thuc xu ly voi file trong php
// mo file
/*
$fopen = fopen('data/database.txt','a+');
if($fopen){
	//echo "mo file thanh cong";
	
	// can phai biet option thao tac voi fil la gi ?
	// r : chi doc fil
	// r+ : vua doc vua ghi
	// w : chi ghi
	
	// ghi du lieu vao file
	$input = "test write file";
	fwrite($fopen, $input);
	
	// doc du lieu moi vua ghi ra
	// mo lai file
	$fp = fopen('data/database.txt', 'r');
	$data = fread($fp, filesize('data/database.txt'));

	// dong file
	fclose($fp);
	fclose($fopen);
	/// ko the dc va ghi file nua
	echo $data;
	
} else {
	echo "khong the mo duoc file";
}
*/

// cac ham tien ich khac lam viec voi file
// kiem tra xem file co ton tai hay ko?
if(file_exists('data/database.txt')){
	echo "File ton tai";
} else {
	echo "khong ton tai";
}
echo "<br/>";

// kiem tra xem file co dc cap quyen ghi ko?
if(is_writable('data/database.txt')){
	echo "yes";
} else {
	echo "No";
}

// ghi du lieu vao file ma ko can dung fwrite
//file_put_contents('data/database.txt', 'sap duoc ve roi');
// doi ten file

if(file_exists('data/database.txt'))
{
	rename('data/database.txt','data/mysql.txt');
}
// xoa file
if(file_exists('data/mysql.txt')) {
	unlink('data/mysql.txt');
}

// copy
// @ ko hien thi warning
if(is_dir('data2')){
	// ton tai thu muc
	@copy('data/mysql.txt', 'data2/database.txt');
} else {
	mkdir('data2');
	// tao thu muc
}