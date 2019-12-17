<?php
	// giup kiem tra xem nguoi dung da dang nhap chua thi moi dc vao trang home
	function checkUserLogin()
	{
		if (!isset($_SESSION['username'])) {
			// quay ve trang login
			header("Location: login.php");
			die();
		}
	}
