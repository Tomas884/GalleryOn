<?php

   class UpdateUserDataController extends UpdateDetails {
	   
	   private $firstname;
	   private $secondname;
	   private $lastname;
	   private $email;
	   private $phone;
	   private $newusername;
	   private $username;
	   private $password;
	   
	   public function __construct($firstname, $secondname, $lastname, $email, $phone, $newusername, $username, $password) {
		   
		   $this->firstname = $firstname;
	       $this->secondname = $secondname;
	       $this->lastname = $lastname;
	       $this->email = $email;
	       $this->phone = $phone;
	       $this->newusername = $newusername;
	       $this->username = $username;
	       $this->password = $password;
		   
	   }
	   
	   public function changeDetails() {
		   $this->getUser($this->firstname, $this->secondname, $this->lastname, $this->email, $this->phone, $this->newusername, $this->username, $this->password);
	   }
	   
	   
   }

?>