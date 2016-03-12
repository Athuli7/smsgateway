<form method="post">
	<input name="number" placeholder = "9020508050">
	<br>
	<input type="text" name="message" placeholder = "Hey there, just testing ! Avoid punctuations of all kinds ! ">
	<br>
	<input type="submit" value="Submit">
</form>

<?php

include "smsGateway.php";	
if(isset($_POST['number'])){
	$smsGateway = new SmsGateway('smsgateway.me@athulraj.com', 'ScaleXYPubPass');
	$deviceID = 19200;
	$number = '+91'.$_POST['number'];
	$message = $_POST['message'];
	$options = [
	//'send_at' => strtoti1me('+10 minutes'), // Send the message in 10 minutes
	'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
	];
	echo "log :- <br>";
	var_dump( $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options) );
}

?>