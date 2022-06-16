<?php

   if (isset($_POST["loginBtn"])) {
	   
	   $username = $_POST["username"];
	   $password = $_POST["password"];
	    
	   include "../classes/database-Handler.classes.php";
	   include "../classes/login.classes.php";
	   include "../classes/login-controller.classes.php";
	   $login = new LoginController($username, $password);
	   
	  
	   $login->loginUser();
	   
	  
	   header("location: ../index.php?error=none");
	   
   }

?>