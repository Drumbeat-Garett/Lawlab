<?php
  require_once ('lib/class.phpmailer.php');

  // Define some constants
  define( "RECIPIENT_NAME", "Lawlab Support" );
  //define( "RECIPIENT_EMAIL", "izheng@drumbeat.net.au" );
  define( "RECIPIENT_EMAIL", "conveyancing@lawlab.com.au" );
  define( "FROM_EMAIL", "notifications@lawlab.com.au" );

  if( isset($_POST['country']) && $_POST['country'] == '')
  {
	  // Read the possible form values
	  $senderName = isset( $_POST['first_name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['first_name'] ) : "";
	  $senderName .= ' ' . isset( $_POST['last_name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['last_name'] ) : "";
	  $senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
	  $senderMessage = (isset($_POST['interest']) && $_POST['interest'] == 0)? 'buying' : 'selling';

	  $subject = "Registered by: " . $senderName;

	  $message = "Subject: Registered interest \n" .
				 "From: " . $senderName . "\n" .
				 "Email: " . $senderEmail . "\n" .
				 "Message: he/she is from ".$_POST['state'] .' and inteerested in '. $senderMessage;


	 // If all values exist, send the email
	  if ( $senderName && $senderEmail && $senderMessage ) {

		$mail = new PHPMailer();
		$mail->IsSMTP(true);  // use SMTP

		//$mail->SMTPDebug  = 2;  // enables SMTP debug information (for testing)
		// 1 = errors and messages
		// 2 = messages only
		$mail->SMTPAuth   = true; // enable SMTP authentication
		$mail->Host       = "tls://email-smtp.us-east-1.amazonaws.com"; // Amazon SES server, note "tls://" protocol
		$mail->Port       = 465;  // set the SMTP port
		$mail->Username   = "AKIAIAM2G5UMCVJRUO5Q"; // SES SMTP  username
		$mail->Password   = "Aj22aGCqVo5pm5UWC5K0Mx927iaBWAvLscz/DDQ636gp";  // SES SMTP password

		$mail->SetFrom(FROM_EMAIL);
		//$mail->AddReplyTo($senderEmail, $senderName);
		$mail->Subject = $subject;
		$mail->MsgHTML($message);
		$mail->AddAddress(RECIPIENT_EMAIL, RECIPIENT_NAME);

		if(!$mail->Send()) {
		 // $response =  $mail->ErrorInfo;
		 $response = 2;
		} else {
		  $response =  1;
		}
		
		header("Location: ../thank-you.php?fb=".$response);
	  }
	}
	else
	{
		//spam
		header("Location: ../thank-you.php?fb=2");
	}
