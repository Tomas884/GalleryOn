<?php

  class LoginController extends Login { //Declared variables as private
	  
	   private $username;
	   private $password;
	   
	   public function __construct($username, $password) {
		   
		   $this->username = $username;
		   $this->password = $password;
		   
	   }
	   
	   public function loginUser() {
		   if ($this->emptyInput() == false) {
			   header("location: ../login.html?error=emptyinput");
			   exit();
		   }
		   
		   $this->getUser($this->username, $this->password);
		   
	   }
	   
	   //Error handler method to check for empty input fields to ensure that all input fields has been filled in in order to proceed
	   private function emptyInput() {
		   $result;
		   if (empty($this->username) || empty($this->password)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
  }

?>