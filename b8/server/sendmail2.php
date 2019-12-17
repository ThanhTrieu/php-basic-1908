<?php
	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	$mail = new PHPMailer(true);
	
	if(isset($_POST['btnSendmail'])){
		$email = $_POST['email'] ?? '';
		$email = strip_tags($email);
		
		$subject = $_POST['subject'] ?? '';
		$subject = strip_tags($subject);
		
		$content = $_POST['content'] ?? '';
		$content = trim($content);
		
		$checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
		if($checkEmail && !empty($subject) && !empty($content)){
			try {
				// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				$mail->isSMTP();
				$mail->Host      = 'smtp.googlemail.com ';
				$mail->SMTPAuth   = true;
				$mail->Username   = 'trieuntgvt3h@gmail.com';
				$mail->Password   = 'trieunt123';
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				$mail->Port       = 587;
				
				//Recipients
				$mail->setFrom('trieuntgvt3h@gmail.com', 'ThanhTrieu');
				$mail->addAddress($email);
				//$mail->addCC('thanhtrieut3h@gmail.com');
				
				// Attachments
				$mail->addAttachment('../img/email.png');
				$mail->addAttachment('../img/email.png');
				$mail->addAttachment('../img/email.png');
				
				// Content
				$mail->isHTML(true);
				$mail->Subject = $subject;
				$mail->Body    = $content;
				
				if($mail->send()){
					header("Location: ../index.php?state=success");
				} else {
					header("Location: ../index.php?state=error");
				}
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
		} else {
			header("Location: ../index.php?state=fail");
		}
		
	}