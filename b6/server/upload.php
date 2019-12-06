<?php
// dinh nghia hang so : duong dan upload file
define('UPLOAD_PATH', '../uploads/images/');

// kiem tra xem nguoi dung bam nut upload chua ?
if(isset($_POST['btnUpload'])) {
	// kiem tra xem nguoi dung da chon file upload chua ?
	if(isset($_FILES['file'])) {
		// hien thi thong tin cua file tu phia form gui len
		// $_FILES la bien toan cuc kieu mang - luu tru thong ve file
		// kiem tra xem file co loi ko ?
		if($_FILES['file']['error'] == 0){
			// lay ra ten file
			$nameFile = $_FILES['file']['name'];
			$tmpName = $_FILES['file']['tmp_name'];
			// $_FILES['file']['tmp_name'] ko rong moi upload
			if($tmpName){
				// tien hanh upload
				$up = move_uploaded_file($tmpName, UPLOAD_PATH . $nameFile);
				if($up){
					header("Location:../index4.php?state=ok");
				} else {
					header("Location:../index4.php?state=fail");
				}
			}
		}
	}
}