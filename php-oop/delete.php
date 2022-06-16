<?php

   if (isset($_POST["delAccBtn"])) {
	   
	   $username = $_POST["delAccEmailUsrnameTxtFld"];
	   $password = $_POST["delAccPwd"];
	   $repeatPwd = $_POST["delAccRepeatPwdConfirm"];
	   
	   include "../classes/database-Handler.classes.php";
	   include "../classes/delete.classes.php";
	   include "../classes/delete-controller.classes.php";
	   
	   $delete = new DeleteController($username, $password, $repeatPwd);
	   
	   $delete->deleteUser();
	   
	   header("location: ../index.php?error=none");
	   
   }

?>