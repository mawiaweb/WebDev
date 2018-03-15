<?php
	include 'Email.php';
	
	$newEmail = new Email();
	
	$newEmail->setSender("webservice@zamiweb.com");
	$newEmail->setSendTo("lpmawia@dmacc.edu");
	$newEmail->setSubject("Test Email Subject");
	$newEmail->setMessage("Test Email message.");

	$inSender = $newEmail->getSender();
	$inSendTo = $newEmail->getSendTo();
	$inSubject = $newEmail->getSubject();
	$inMessage = $newEmail->getMessage();
	
	$messageSent = "";
	if($newEmail->sendEmail() == true)
	{
		$messageSent = "The following email has been sent:";
	}
	else
	{
		$messageSent = "The following email failed to send:";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Assignment: Email Class</title>
		<style>
			h1 {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Assignment: Email Class</h1>
		<h3>Confirmation Message: <?php echo $messageSent; ?></h3>
		<p>From: <?php echo $inSender; ?></p>
		<p>To: <?php echo $inSendTo; ?></p>
		<p>Subject: <?php echo $inSubject; ?></p>
		<p>Message: <?php echo $inMessage; ?></p>
	</body>
</html>
