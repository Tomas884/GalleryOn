<?php

   class UpdatePassword extends DatabaseHandler {
	   
	   protected function getUser($emailusername, $oldpassword, $newpassword, $repeatnewpassword) {
		   
		   $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   if (!$stmt->execute(array($emailusername, $oldpassword))) {
			   $stmt = null;
			   header("location: ../changePwd.php?error=stmtfailed");
			   exit();
		   }
		   
		   if ($stmt->rowCount() == 0) {
			   $stmt = null;
			   header("location: ../changePwd.php?error=data-not-found");
			   exit();
		   }
		   
		   $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   $checkPwd = password_verify($oldpassword, $hashedPwd[0]["users_password"]);
		   
		   if ($checkPwd == false) {
			   $stmt = null;
			   header("location: ../changePwd.php?error=wrong-password");
			   exit();
		   } else if ($checkPwd == true) {
			   $hashedNewPwd = password_hash($newpassword, PASSWORD_DEFAULT);
			   
			   $stmt = $this->connect()->prepare("UPDATE users SET users_password = '$hashedNewPwd' WHERE users_username = '$emailusername';");
			   
			   
			   if (!$stmt->execute(array($emailusername, $oldpassword, $newpassword, $repeatnewpassword))) {
				   $stmt = null;
				   header("location: ../changePwd.php?error=stmtfailed");
				   exit();
			   }
			   
			   if ($stmt->rowCount() == 0) {
				   $stmt = null;
				   header("location: ../changePwd.php?error=user-not-found");
				   exit();
			   }
			   
			   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   $stmt = null;
			   
		   }
		   $stmt = null;
	   }
	   
   }

?>