<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

	
$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>New Task!</title>
</head>
<body>
<p><u><b>Testing</b></u></p>

<p><b>Name : rajesh kumar</b>.</p>

<p><b>Email :</b><br> kumar8271@gmail.com.</p>

<p><b>Contact Details :</b><br> 9873120514.</p>

<p><b>Message :</b><br> hello this is testing email.</p>";

$message .= "<p>Please Attend meeting on time.</p>

Thanks
</body>
</html>
";


	// For Hostinger
	$mail = new PHPMailer(true);                   
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 2;
	$mail->SMTPAuth = true;
	//$mail->SMTPSecure = 'auto'; 
	$mail->Host = "smtp.hostinger.com";
	$mail->Port = 587;
	$mail->Username = "info@zexweb.in";
	$mail->Password = "Zexweb@123";
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");
	$mail->AddCustomHeader("X-Priority: 1 (Highest)\r\n");
	$mail->AddCustomHeader("X-MSMail-Priority: High\r\n");
	$mail->AddCustomHeader("Importance: High\r\n");
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");    
	$mail->setFrom('info@zexweb.in', 'Zexweb Technologies Private Limited');
    $mail->addAddress('kumar8271@gmail.com','Vivek Travels');  
    $mail->Subject = 'Testing Email';
	$mail->MsgHTML($message);
	$mail->isHTML(true);
	$mail->CharSet = "utf-8";
	if($mail->send())
	{
		return "Message has been sent";
	}
	else
	{
		return "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
	}
	
	// For Godaddy
/*	$mail = new PHPMailer(true);                   
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'auto'; 
	$mail->Host = "mail.vivektravels.com";
	$mail->Port = 587;
	$mail->Username = "rajesh@vivektravels.com";
	$mail->Password = "VTPL@123456";
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");
	$mail->AddCustomHeader("X-Priority: 1 (Highest)\r\n");
	$mail->AddCustomHeader("X-MSMail-Priority: High\r\n");
	$mail->AddCustomHeader("Importance: High\r\n");
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");    
	$mail->setFrom('rajesh@vivektravels.com', 'Rajesh Kumar');
    $mail->addAddress('kumar8271@gmail.com','Vivek Travels');  
    $mail->Subject = 'Testing Email';
	$mail->MsgHTML($message);
	$mail->isHTML(true);
	$mail->CharSet = "utf-8";
	if($mail->send())
	{
		return "Message has been sent";
	}
	else
	{
		return "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
	}
	*/
	
/*		//	For Gmail
	$mail = new PHPMailer(true);                   
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->Username = "information.vtms@gmail.com";
	$mail->Password = "Rajesh@123";
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");
	$mail->AddCustomHeader("X-Priority: 1 (Highest)\r\n");
	$mail->AddCustomHeader("X-MSMail-Priority: High\r\n");
	$mail->AddCustomHeader("Importance: High\r\n");
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");    
	$mail->setFrom('information.vtms@gmail.com', 'VIVEK TRAVELS');
    $mail->addAddress('kumar8271@gmail.com','Vivek Travels');  
    $mail->Subject = 'Testing Email';
	$mail->MsgHTML($message);
	$mail->isHTML(true);
	$mail->CharSet = "utf-8";
	if($mail->send())
	{
		return "Message has been sent";
	}
	else
	{
		return "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
	}*/
?>
