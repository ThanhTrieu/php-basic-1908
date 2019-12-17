<?php
	if(isset($_POST['btnSendmail'])){
		$email = $_POST['email'] ?? '';
		$email = strip_tags($email);
		
		$subject = $_POST['subject'] ?? '';
		$subject = strip_tags($subject);
		
		$content = $_POST['content'] ?? '';
		$content = trim($content);
		
		$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
		
		if($checkEmail && !empty($subject) && !empty($content)){
			// cho phep send mail
			if(mySendMail($email, $subject, $content)){
				header("Location: ../index.php?state=success");
			} else {
				header("Location: ../index.php?state=error");
			}
		} else {
			header("Location: ../index.php?state=fail");
		}
	}
	
	function mySendMail($email, $subject, $content)
	{
		$header = "From:trieuntgvt3h@gmail.com \r\n";
		//$header = "Cc: \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";
		$send = mail ($email,$subject,$content,$header);
		if($send){
			return true;
		}
		return false;
	}
