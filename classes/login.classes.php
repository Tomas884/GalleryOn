<?php

   class Login extends DatabaseHandler { //Extends DatabaseHandler class which is located inside the "database-Handler.classes.php" file
	   
	   protected function getUser($username, $password) { //$username and $email are properties from the controller class "register-controller.classes.php" file but not variables
		   $stmt = $this->connect()->prepare('SELECT users_password FROM users WHERE users_username = ? OR users_email = ?;');
		   
		   
		   if (!$stmt->execute(array($username, $password))) {
			   $stmt = null;
			   header("location: ../register.html?error=stmtfailed");
			   exit();
		   }
		   
		   if ($stmt->rowCount() == 0) {
			   $stmt = null;
			   header("location: ../login.html?error=user-not-found");
			   exit();
		   }
		   
		   $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   $checkPwd = password_verify($password, $hashedPwd[0]["users_password"]);
		   
		   if ($checkPwd == false) {
			   $stmt = null;
			   header("location: ../login.html?error=wrong-password");
			   exit();
		   } else if ($checkPwd == true) {
			   $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_username = ? OR users_email = ? AND users_password = ?;');
			   
			   if (!$stmt->execute(array($username, $username, $password))) {
				   $stmt = null;
				   header("location: ../login.html?error=stmtfailed");
				   exit();
			   }
			   
			   if ($stmt->rowCount() == 0) {
				   $stmt = null;
				   header("location: ../login.html?error=user-not-found");
				   exit();
			   }
			   
			   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
			   
			   session_start();
			   $_SESSION["userid"] = $user[0]["users_id"];
			   $_SESSION["userfirstname"] = $user[0]["users_first_name"] . "<br><br>";
			   $_SESSION["usersecondname"] = $user[0]["users_second_name"] . "<br><br>";
			   $_SESSION["userlastname"] = $user[0]["users_last_name"] . "<br><br>";
			   $_SESSION["useremail"] = $user[0]["users_email"] . "<br><br>";
			   $_SESSION["userphoneno"] = $user[0]["users_phone_numb"] . "<br><br>";
			   $_SESSION["userusername"] = $user[0]["users_username"] . "<br><br>";
			   $_SESSION["userpassword"] = $password;
			   
			   $stmt = null;
			   
		   }
		   
		   $stmt = null; //Ends the statement
		   
		   
	   }
	   
   }

?>