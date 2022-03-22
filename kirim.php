<?php
	include 'LoginData.php';
	include 'kirimemail.php';

	$emailHandler = new EmailHandler();

	$emailHandler->name 	= $_POST['name'];
	$emailHandler->email 	= $_POST['email'];
	$emailHandler->phone 	= $_POST['phone'];


	$emailHandler->sendEmail();
	
	$emailHandler->sendWhatsApp();






	/*$loginData = new LoginData();
	$loginData->email = $_POST['email'];
	$loginData->password = $_POST['password'];

	$loginData->verify();*/
?>