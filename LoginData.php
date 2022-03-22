<?php
	class LoginData {
		public string email;
		public string password;

		public function verify(){
			$passwordDariDatabase = //ambil password dari database
			$verifyResult = password_verify($this->password, $passwordDariDatabase);

			return verifyResult;
		}
	}
?>