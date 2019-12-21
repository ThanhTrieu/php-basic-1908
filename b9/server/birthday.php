<?php
if(isset($_POST['btnCheck']))
{
	$birthday = $_POST['birthday'] ?? '';
	$birthday = strip_tags($birthday);
	
	if(!empty($birthday)) {
		$arrBirthday = explode('-', $birthday);
		$dateBirthday = $arrBirthday[2];
		$monthBirthday = $arrBirthday[1];
		$currentYear = date('Y');
		
		$newBirthday = $currentYear ."-".$monthBirthday ."-". $dateBirthday;
		// so sanh voi ngay hien tai
		$today = date('Y-m-d');
		
		$timeBirthday = strtotime($newBirthday);
		$timeToday = strtotime($today);
		
		if($timeToday == $timeBirthday){
			header("Location: ../index2.php?state=happy&date={$birthday}");
		} elseif ($timeToday > $timeBirthday) {
			header("Location: ../index2.php?state=pass&date={$birthday}");
		} else {
			$rangeTime = $timeBirthday - $timeToday;
			$days = ceil($rangeTime/86400);
			header("Location: ../index2.php?state=wait&day={$days}&date={$birthday}");
		}
	}
	else {
		header("Location: ../index2.php?state=fail");
	}
}