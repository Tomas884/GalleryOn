<?php

  if (isset($_POST["updAccBtn"])) {
	  
	$firstname = $_POST["updAccFirstNameTxtFld"];
    $secondname = $_POST["updAccSecondNameTxtFld"];
    $lastname = $_POST["updAccLastNameTxtFld"];
    $email = $_POST["updAccEmailTxtFld"];
    $phone = $_POST["updAccPhoneNoTxtFld"];
    $newusername = $_POST["updAccUsernameTxtFld"];
		  
    $username = $_POST["confirmUsernameOrEmail"];
    $password = $_POST["confirmPwd"];

	include "../classes/database-Handler.classes.php";
	include "../classes/updateAccount.classes.php";
	include "../classes/updateAccount-controller.classes.php";
	
	$updateAccount = new UpdateUserDataController($firstname, $secondname, $lastname, $email, $phone, $newusername, $username, $password);
	$updateAccount->changeDetails();

	header("location: ../updateAccountData.php?success=account-data-updated");
	
  }

?>