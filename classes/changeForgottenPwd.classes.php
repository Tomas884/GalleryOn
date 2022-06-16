<?php

   class ChangeForgottenPassword extends DatabaseHandler {
	   
	   protected function getUser($emailusername, $newPassword, $repeatNewPwd) {
		   
		   $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   if (!$stmt->execute(array($emailusername, $newPassword))) {
			   $stmt = null;
			   header("location: ../changeForgottenPwd.php?error=stmtfailed");
			   exit();
		   }
		   
		   if ($stmt->rowCount() == 0) {
			   $stmt = null;
			   header("location: ../changeForgottenPwd.php?error=user-not-found");
			   exit();
		   }
		   
		   if ($emailusername == false) {
			   $stmt = null;
			   header("location: ../changeForgottenPwd.php?error=wrong-username-or-email");
			   exit();
		   } else if ($emailusername == true) {
			   $hashedNewPwd = password_hash($newPassword, PASSWORD_DEFAULT);
			   
			   $stmt = $this->connect()->prepare("UPDATE users SET users_password = '$hashedNewPwd' WHERE users_username = '$emailusername';");
			   
			   if (!$stmt->execute(array($emailusername, $newPassword, $repeatNewPwd))) {
				   $stmt = null;
				   header("location: ../changeForgottenPwd.php?error=stmtfailed");
				   exit();
			   }
			   
			   if ($stmt->rowCount() == 0) {
				   $stmt = null;
				   header("location: ../changeForgottenPwd.php?error=user-not-found");
				   exit();
			   }
			   
			   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   $stmt = null;
		   }
		   $stmt = null;
	   }
	   
   }

?>