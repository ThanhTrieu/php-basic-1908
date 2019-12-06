<?php
	// nhan du lieu tu phia client gui len
	$name = $_POST['nameSingle'] ?? '';
	$name = strip_tags(trim($name));
	
	if(!empty($name)){
		// co du lieu gui len
		$fp = fopen('data.txt','r');
		if($fp){
			// doc du lieu tu file ra
			$data = fread($fp, filesize('data.txt'));
			// close file
			fclose($fp);
			
			// lam the nao de so sanh tu khoa nguoi dung gui len co nam trong file data.txt ko?
			$arrData = explode(',', $data);
			$info = [];
			foreach ($arrData as $key => $item) {
				if(trim($item) == $name){
					$info[] = $name;
				}
			}
			// nhung file list.php vao trong file ajax.php
			require "../view/list.php";
		}
	} else {
		// ko co du lieu gui len
		echo "blank";
	}
