<?php
	session_start();
	if(isset($_POST['logout'])) {
		// xoa session va cookie(neu co) tu ben login tao ra
		if (isset($_SESSION['username'])) {
			unset($_SESSION['username']);
		}
		if (isset($_COOKIE['cookieApp'])) {
			setcookie('cookieApp', '', time() - 180, '/', '', 0);
		}
		// quay ve trang login
		header("Location: ../login.php");
	}