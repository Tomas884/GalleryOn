<?php
   session_start();
?>

<!DOCTYPE html>
<html lang='en'>

  <head>
     <link href='style/css/styleUpdateAccountData.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
	
	<script src='js/js-validation/update-acc-data-validation.js'></script>
    
    <title>GalleryOn: Update Account Details</title>
  </head>
  
  <body>
     <div class='updAccDataArea'>
	    <form action='php-oop/updateAccount.php' method='post' name='updateAccDataForm' onsubmit='return validateForm()'>
          <div id='updAccDataLbl'><label>Update Account Details:</label></div>
          <input type='text' id='updAccFirstNameTxtFld' name='updAccFirstNameTxtFld' placeholder='First Name'></input>
	      <input type='text' id='updAccSecondNameTxtFld' name='updAccSecondNameTxtFld' placeholder='Second Name'></input>
	      <input type='text' id='updAccLastNameTxtFld' name='updAccLastNameTxtFld' placeholder='Last Name'></input>
		  <input type='text' id='updAccEmailTxtFld' name='updAccEmailTxtFld' placeholder='Email'></input>
		  <input type='text' id='updAccPhoneNoTxtFld' name='updAccPhoneNoTxtFld' placeholder='Phone Number'></input>
		  <input type='text' id='updAccUsernameTxtFld' name='updAccUsernameTxtFld' placeholder='Username'></input>
		  
		  <h3 id='confirmLbl' name='confirmLbl'>Confirm changes with your current Username/Email and Password:</h3>
		  <input type='text' id='confirmUsernameOrEmail' name='confirmUsernameOrEmail' placeholder='Username/Email'></input>
		  <input type='password' id='confirmPwd' name='confirmPwd' placeholder='Password'></input>
		  
		  <button type='submit' id='updAccBtn' name='updAccBtn' onClick='validateForm(this.form)'>Update Account Details</button>
		  <a href='myAccData.php' style='text-decoration:none' id='showMyAccDataLink' name='showMyAccDataLink'>Show My Account Details</a>
		  <a href='changePwd.html' style='text-decoration:none' id='chngPwdLink' name='chngPwdLink'>Change Password</a>
		 </form>
  </div>
  
  <div class='logo'>
	     <img border='#' alt='GalleryOnLogo' src='style/logo/GalleryOnLogo.png' width='450' height='150'>
	</div>
  
  </body>

</html>