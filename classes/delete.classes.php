<?php

   class Delete extends DatabaseHandler {
	   
	   protected function getUser($username, $password) {
		   
		   $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   if (!$stmt->execute(array($username, $password))) {
			   $stmt = null;
			   header("location: ../deleteAccount.php?error=stmtfailed");
			   exit();
		   }
		   
		   if ($stmt->rowCount() == 0) {
			   $stmt = null;
			   header("location: ../deleteAccount.php?error=user-not-found");
			   exit();
		   }
		   
		   $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   $checkPwd = password_verify($password, $hashedPwd[0]["users_password"]);
		   
		   if ($checkPwd == false) {
			   $stmt = null;
			   header("location: ../deleteAccount.php?error=wrong-password");
			   exit();
		   } else if ($checkPwd == true) {
			   
			   $stmt = $this->connect()->prepare("DELETE FROM users WHERE users_username = '$username';");
			   
			   if (!$stmt->execute(array($username, $username, $password))) {
				   $stmt = null;
				   header("location: ../deleteAccount.php?error=stmtfailed");
				   exit();
			   }
			   
			   if ($stmt->rowCount() == 0) {
				   $stmt = null;
				   header("location: ../deleteAccount.php?error=user-not-found");
				   exit();
			   }
			   
			   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   
			   //$stmt = $this->connect()->prepare('DELETE FROM users WHERE users_username = '$username';');
			   
			   $stmt = null;
		   }
		   
		   $stmt = null;
		   
	   }
	   
   }

?>