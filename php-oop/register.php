<?php

   if (isset($_POST["registerBtn"])) {
	   
	   //Gathers the user entered data from register.html page form
	   $firstName = $_POST["firstNameTxtFld"];
	   $secondName = $_POST["secondNameTxtFld"];
	   $lastName = $_POST["lastNameTxtFld"];
	   $email = $_POST["emailTxtFld"];
	   $phoneNumb = $_POST["phoneNoTxtFld"];
	   $username = $_POST["usernameTxtFld"];
	   $password = $_POST["pwd"];
	   $repeatPwd = $_POST["repeatPwd"];
	   
	   //Instantiate RegisterController class
	   include "../classes/database-Handler.classes.php";
	   include "../classes/register.classes.php";
	   include "../classes/register-controller.classes.php";
	   $signup = new RegisterController($firstName, $secondName, $lastName, $email, $phoneNumb, $username, $password, $repeatPwd);
	   
	   //Running error handlers and user signup
	   $signup->signupUser();
	   
	   //Going to home page once user successfully registers
	   header("location: ../index.php?error=none");
	   
   }

?>