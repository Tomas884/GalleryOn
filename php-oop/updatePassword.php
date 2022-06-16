<?php

  if (isset($_POST["changePwdBtn"])) {
	  
	  $emailusername = $_POST["pwdChngEmailUsrTxtFld"];
	  $oldpassword = $_POST["pwdChngOldPwdTxtFld"];
	  $newpassword = $_POST["pwdChngNewPwdTxtFld"];
	  $repeatnewpassword = $_POST["pwdChngRepeatNewPwdTxtFld"];
	  
	  include "../classes/database-Handler.classes.php";
	  include "../classes/updatePassword.classes.php";
	  include "../classes/updatePassword-controller.classes.php";
	  
	  $updatePassword = new UpdatePasswordController($emailusername, $oldpassword, $newpassword, $repeatnewpassword);
	  $updatePassword->changeUserPassword();
	  
	  header("location: ../changePwd.php?success=password-has-been-changed");
	  
  }

?>

