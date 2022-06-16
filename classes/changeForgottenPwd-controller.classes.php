<?php

   class ChangeForgottenPwdController extends ChangeForgottenPassword {
	   
	  private $emailusername;
	  private $newPassword;
	  private $repeatNewPwd;
	  
	  public function __construct($emailusername, $newPassword, $repeatNewPwd) {
		  
		  $this->emailusername = $emailusername;
		  $this->newpwd = $newPassword;
		  $this->repeatnewpwd = $repeatNewPwd;
		  
	  }
	  
	  public function changeForgottenPassword() {
		  $this->getUser($this->emailusername, $this->newpwd, $this->repeatnewpwd);
	  }
	   
   }

?>