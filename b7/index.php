<?php
	session_start();
	// thiet lap session
	
	// set cookie
	// time() tra ve so giay tinh tu ngay 1/1/1970 den dung thoi diem hien tai
	setcookie('myCookie', 'T3hPHP', time() + 10, '/', '', 0);
	
	// tao ra cac session va gan gia tri (bat buoc phai khoi tao session (session_start))
	$_SESSION['age'] = 20;
	$_SESSION['email'] = 'test@gmail.com';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Demo cookie</title>
</head>
<body>
	<a href="index2.php"> goto index (xem gia tri cookie ben file index2)</a>
</body>
</html>
