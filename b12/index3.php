<?php
	require 'controllers/Home.php';
	use b12\controllers\Home as HomeControler;
	
	$home = new HomeControler;
	$home->index();
