<?php
session_start();

if (isset($_POST['login'])) {
	$user = $_POST['user'] ?? '';
	$user = trim(strip_tags($user));
	
	$pass = $_POST['pass'] ?? '';
	$pass = trim(strip_tags($pass));

	if(empty($user) || empty($pass)){
		// thong bao la dien thong tin vao
		header("Location:../login.php?state=fail");
	} else {
		if($user === 'admin' && $pass === '123'){
			// khoi tao session va cookie
			$remember = $_POST['remember'] ?? '';
			if($remember === 'on'){
				// set cookie
				setcookie('cookieApp', 'DemoAppLogin', time()+180, '/', '', 0);
			}
			$_SESSION['username'] = $user;
			header("Location: ../home.php");
			
		} else {
			header("Location:../login.php?state=error");
		}
	}
	
}