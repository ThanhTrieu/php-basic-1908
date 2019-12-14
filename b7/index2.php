<?php
	session_start();
	// khoi tao session
	
	// lay gia trin cookie ma ben index.php tao ra
	// php ho tro bien toan cuc kieu mang $_COOKIE
	$cookie = $_COOKIE['myCookie'] ?? '';
	
	// Xoa cookie
	setcookie('myCookie', '', time() - 10, '/', '' ,0);
	
	echo "cookie : {$cookie}";
	echo "<br>";
	
	// lay ra cac gia tri session tu ben index
	$age = $_SESSION['age'] ?? 0;
	$email = $_SESSION['email'] ?? '';
	echo "age - {$age} / email - {$email}";
	
	// xoa session
	// xoa tat session
	//session_destroy();
	
	if(isset($_SESSION['age'])){
		unset($_SESSION['age']);
	}
	
?>