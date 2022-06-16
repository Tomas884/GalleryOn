<?php

  if (isset($_POST["changeForgottenPwdBtn"])) {
	  
	  $emailusername = $_POST["emailUsernameTxtFld"];
	  $newPassword = $_POST["newPasswordTxtFld"];
	  $repeatNewPwd = $_POST["repeatNewPwdTxtFld"];	  
	  
	  include "../classes/database-Handler.classes.php";
	  include "../classes/changeForgottenPwd.classes.php";
	  include "../classes/changeForgottenPwd-controller.classes.php";
	  
	  $changeForgottenPwd = new ChangeForgottenPwdController($emailusername, $newPassword, $repeatNewPwd);
	  $changeForgottenPwd->changeForgottenPassword();
	  
	  header("location: ../changeForgottenPwd.php?success=forgotten-password-has-been-changed");
  }

?>