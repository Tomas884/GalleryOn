<?php

   class Register extends DatabaseHandler { //Extends DatabaseHandler class which is located inside the "database-Handler.classes.php" file
	   
	   protected function setUser($firstName, $secondName, $lastName, $email, $phoneNumb, $username, $password) { //$username and $email are properties from the controller class "register-controller.classes.php" file but not variables
		   $stmt = $this->connect()->prepare('INSERT INTO users (users_first_name, users_second_name, users_last_name, users_email, users_phone_numb, users_username, users_password) VALUES (?, ?, ?, ?, ?, ?, ?);');
		   
		   $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		   
		   if (!$stmt->execute(array($firstName, $secondName, $lastName, $email, $phoneNumb, $username, $hashedPwd))) {
			   $stmt = null;
			   header("location: ../register.html?error=stmtfailed");
			   exit();
		   }
		   
		   $stmt = null; //Ends the statement
		   
		   /**
		   $resultCheck;
		   
		   if ($stmt->rowCount() > 0) {
			   $resultCheck = false;
		   } else {
			   $resultCheck = true;
		   }
		   
		   return $resultCheck;
		   */
	   }
	   
	   protected function checkUser($username, $email) { //$username and $email are properties from the controller class "register-controller.classes.php" file but not variables
		   $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   if (!$stmt->execute(array($username, $email))) {
			   $stmt = null;
			   header("location: ../register.html?error=stmtfailed");
			   exit();
		   }
		   
		   $resultCheck;
		   
		   if ($stmt->rowCount() > 0) {
			   $resultCheck = false;
		   } else {
			   $resultCheck = true;
		   }
		   
		   return $resultCheck;
		   
	   }
	   
   }

?>