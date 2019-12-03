<?php
// nhan du lieu tu index.php gui len
// vi ben phia index.php gui du lieu len bang method GET nen
// chung ta se su dung bien toan cuc kieu mang cua php
// la $_GET de lay du lieu ve
$id= $_GET['id'] ?? 0; // isset($_GET['id']) ? $_GET['id'] : 0
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? 0;

echo "id : {$id} - name : {$name} - age : {$age}";
echo "<br>";

// kiem tra xem thuc su co ton tai method get tu form gui len ko? (kiem tra xem nguoi dung bam nut login chua)
if(isset($_GET['btnLogin'])){
	// lay cac thong tin tu form gui len
	$user = $_GET['user'] ?? '';
	$pass = $_GET['pass'] ?? '';
	
	echo "user : {$user} - pass : {$pass}";
}