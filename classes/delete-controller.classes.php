<?php

   class DeleteController extends Delete {
	   
	   private $username;
	   private $password;
	   private $repeatPwd;
	   
	   public function __construct($username, $password, $repeatPwd) {
		   
		   $this->username = $username;
		   $this->password = $password;
		   $this->repeatPwd = $repeatPwd;
		   
	   }
	   
	   public function deleteUser() {
		   if ($this->emptyInput() == false) {
			   header("location: ../deleteAccount.php?error=emptyinput");
			   exit();
		   }
		   $this->getUser($this->username, $this->password, $this->repeatPwd);
	   }
	   
	   private function emptyInput() {
		   $result;
		   if (empty($this->username) || empty($this->password) || empty($this->repeatPwd)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
   }

?>