<?php
	include 'LoginData.php';

	$loginData = new LoginData();
	$loginData->email = $_POST['email'];
	$loginData->password = $_POST['password'];

	$loginData->verify();
?>