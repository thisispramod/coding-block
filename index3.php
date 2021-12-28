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
<p><u><b>Student Query on your profile. Details mentioned below:</b></u></p>

<p><b>Name : ".$_POST['name']."</b>.</p>

<p><b>Email :</b> ".$_POST['email']."</p>

<p><b>Contact Details :</b>".$_POST['phone']."</p>

<p><b>Message :</b> ".$_POST['message']."</p>";

$message .= "<p>Please contact</p>

Thanks
</body>
</html>
";


	// For Hostinger
/*	$mail = new PHPMailer(true);                   
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
	*/
	// For Godaddy
	$mail = new PHPMailer(true);                   
	$mail->IsSMTP(); 
	//$mail->SMTPDebug  = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "sg2plzcpnl487149.prod.sin2.secureserver.net";
	$mail->Port = 465;
	$mail->Username = "contact@lcmhcf.com";
	$mail->Password = "lcmhcf@1234";
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");
	$mail->AddCustomHeader("X-Priority: 1 (Highest)\r\n");
	$mail->AddCustomHeader("X-MSMail-Priority: High\r\n");
	$mail->AddCustomHeader("Importance: High\r\n");
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");    
	$mail->setFrom('contact@lcmhcf.com', 'LCMHCF');
    //$mail->addAddress($user['email'],$user['first_name'].''.$user['last_name'] ); 
	$mail->addAddress('ravinarayan47@gmail.com','RAVI Narayan'); 
	$mail->addAddress('ravinarayan47@gmail.com','ravi narayan'); 	
    $mail->Subject = 'Someone wanna contact you';
	$mail->MsgHTML($message);
	$mail->isHTML(true);
	$mail->CharSet = "utf-8";
	if($mail->send())
	{
		//echo "Message has been sent";
		$_SESSION['message'] = "Query has been sent";
	}
	else
	{
		echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
	}
	
	
/*		//	For Gmail
	$mail = new PHPMailer(true);                   
	$mail->IsSMTP(); 
	$mail->SMTPDebug  = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = ;
	$mail->Username = "contact@lcmhcf.com";
	$mail->Password = "lcmhcf@1234";
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");
	$mail->AddCustomHeader("X-Priority: 1 (Highest)\r\n");
	$mail->AddCustomHeader("X-MSMail-Priority: High\r\n");
	$mail->AddCustomHeader("Importance: High\r\n");
	$mail->AddCustomHeader("MIME-Version: 1.0\r\n");    
	$mail->setFrom('contact@lcmhcf.com', 'lcmhcf');
    $mail->addAddress('ravinarayan47@gmail.com','lcmhcf');  
    $mail->Subject = 'lcmhcf.com';
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
?>
