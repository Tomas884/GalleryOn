<?php

  class RegisterController extends Register { //Declared variables as private
	  
	   private $firstName;
	   private $secondName;
	   private $lastName;
	   private $email;
	   private $phoneNumb;
	   private $username;
	   private $password;
	   private $repeatPwd;
	   
	   public function __construct($firstName, $secondName, $lastName, $email, $phoneNumb, $username, $password, $repeatPwd) {
		   
		   $this->firstName = $firstName;
		   $this->secondName = $secondName;
		   $this->lastName = $lastName;
		   $this->email = $email;
		   $this->phoneNumb = $phoneNumb;
		   $this->username = $username;
		   $this->password = $password;
		   $this->repeatPwd = $repeatPwd;
		   
	   }
	   
	   public function signupUser() {
		   if ($this->emptyInput() == false) {
			   header("location: ../register.html?error=emptyinput");
			   exit();
		   }
		   if ($this->invalidUsername() == false) {
			   header("location: ../register.html?error=username");
			   exit();
		   }
		   if ($this->invalidEmail() == false) {
			   header("location: ../register.html?error=email");
			   exit();
		   }
		   if ($this->pwdMatch() == false) {
			   header("location: ../register.html?error=password-does-not-match");
			   exit();
		   }
		   if ($this->uidTakenCheck() == false) {
			   header("location: ../register.html?error=username-or-email-is-taken");
			   exit();
		   }
		   
		   $this->setUser($this->firstName, $this->secondName, $this->lastName, $this->email, $this->phoneNumb, $this->username, $this->password);
		   
	   }
	   
	   //Error handler method to check for empty input fields to ensure that all input fields has been filled in in order to proceed
	   private function emptyInput() {
		   $result;
		   if (empty($this->firstName) || empty($this->secondName) || empty($this->lastName) || empty($this->email) || empty($this->phoneNumb) || empty($this->username) || empty($this->password) || empty($this->repeatPwd)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
	   private function invalidUsername() {
		   $result;
		   if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
	   private function invalidEmail() {
		   $result;
		   if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
	   private function pwdMatch() {
		   $result;
		   if ($this->password !== $this->repeatPwd) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	   
	   private function uidTakenCheck() {
		   $result;
		   if (!$this->checkUser($this->username, $this->email)) {
			   $result = false;
		   } else {
			   $result = true;
		   }
		   return $result;
	   }
	  
  }

?>