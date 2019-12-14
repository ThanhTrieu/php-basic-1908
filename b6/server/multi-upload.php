<?php

define('UPLOAD_PATH','../uploads/images/');

if(isset($_POST['upload'])){
	if(isset($_FILES['multiFile'])){
		$arrNameFile = $_FILES['multiFile']['name'];
		// mang chua tat cac ten cua file upload
		$chekUp = false;
		$arrFile = [];
		foreach ($arrNameFile as $key => $item) {
			// lay ra ten file : $item
			// la ra tmp_name cua tung file
			$tmpName = $_FILES['multiFile']['tmp_name'][$key];
			if($_FILES['multiFile']['error'][$key] == 0 ){
				$chekUp = move_uploaded_file($tmpName, UPLOAD_PATH . $item);
				// lay ra tat ca ten file upload cho vao 1 mang
				$arrFile[] = $item;
			}
		}
		
		$strFile = implode(',', $arrFile);
		
		if($chekUp){
			// upload thanh cong
			header("Location:../index4.php?state=ok&file={$strFile}");
		} else {
			// upload that bai
			header("Location:../index4.php?state=fail");
		}
	}
}