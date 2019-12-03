<?php
if(isset($_POST['btnCheck'])){
	$number = $_POST['number'] ?? '';
	$number = is_numeric($number) ? $number : '';
	
	if(empty($number)){
		// quay ve form check number
		// header() : dieu huong trang
		header("Location:../index2.php?state=empty&num={$number}");
	} else {
		if(checkNumber($number)){
			header("Location:../index2.php?state=ok&num={$number}");
		} else {
			header("Location:../index2.php?state=err&num={$number}");
		}
	}
}

function checkNumber($number)
{
	// ham bo tro
	if($number <= 1){
		return false;
	}
	if($number == 2){
	    return true;
	}
	
	for ($i = 2; $i <= sqrt($number); $i++) {
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}