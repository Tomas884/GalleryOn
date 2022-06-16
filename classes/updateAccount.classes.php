<?php

   class UpdateDetails extends DatabaseHandler {
	   
	   protected function getUser($firstname, $secondname, $lastname, $email, $phone, $newusername, $username, $password) {
		   $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   if (!$stmt->execute(array($username, $password))) {
			   $stmt = null;
			   header("location: ../updateAccountData.php?error=stmtfailed");
			   exit();
		   }
		   
		   if ($stmt->rowCount() == 0) {
			   $stmt = null;
			   header("location: ../updateAccountData.php?error=data-not-found");
			   exit();
		   }
		   
		   $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   $checkPwd = password_verify($password, $hashedPwd[0]["users_password"]);
		   
		   if ($checkPwd == false) {
			   $stmt = null;
			   header("location: ../updateAccountData.php?error=wrong-username");
			   exit();
		   } else if ($checkPwd == true) {
			   $stmt = $this->connect()->prepare("UPDATE users SET users_first_name = '$firstname', users_second_name = '$secondname', users_last_name = '$lastname', users_email = '$email', users_phone_numb = '$phone', users_username = '$newusername' WHERE users_username = '$username';");
			   
			   if (!$stmt->execute(array($firstname, $secondname, $lastname, $email, $phone, $newusername, $username, $password))) {
				   $stmt = null;
				   header("location: ../updateAccountData.php?error=stmtfailed");
				   exit();
			   }
			   
			   if ($stmt->rowCount() == 0) {
				   $stmt = null;
				   header("location: ../updateAccountData.php?error=user-not-found");
				   exit();
			   }
			   
			   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   $stmt = null;
			   
		   }
		   $stmt = null;
	   }
	   
   }

?>