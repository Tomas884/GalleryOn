<?php

   class UpdatePasswordController extends UpdatePassword {
	   
	  private $emailusername;
	  private $oldpassword;
	  private $newpassword;
	  private $repeatnewpassword;
	  
	  public function __construct($emailusername, $oldpassword, $newpassword, $repeatnewpassword) {
		  
		  $this->emailusername = $emailusername;
	      $this->oldpassword = $oldpassword;
	      $this->newpassword = $newpassword;
	      $this->repeatnewpassword = $repeatnewpassword;
		  
	  }
	  
	  public function changeUserPassword() {
		  $this->getUser($this->emailusername, $this->oldpassword, $this->newpassword, $this->repeatnewpassword);
	  }
	   
   }

?>