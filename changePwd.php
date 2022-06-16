<?php
  session_start();
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
	<link href='style/css/styleChangePwd.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
	
	<script src='js/js-validation/change-pwd-validation.js'></script>
    
    <title>GalleryOn: Change Password</title>
	</head>
	
	<body>
	
	<div class='pwdChangeArea'>
	   <form action='php-oop/updatePassword.php' method='post' name='changePasswordForm' onsubmit='return validateForm()'>
	     <div id='chngPwdLbl'><label>Change Password:</label></div>
	     <input type='text' id='pwdChngEmailUsrTxtFld' name='pwdChngEmailUsrTxtFld' placeholder='Email/Username'></input>
	     <input type='password' id='pwdChngOldPwdTxtFld' name='pwdChngOldPwdTxtFld' placeholder='Old Password'></input>
	     <input type='password' id='pwdChngNewPwdTxtFld' name='pwdChngNewPwdTxtFld' placeholder='New Password'></input>
	     <input type='password' id='pwdChngRepeatNewPwdTxtFld' name='pwdChngRepeatNewPwdTxtFld' placeholder='Repeat New Password'></input>
		 <button type='submit' id='changePwdBtn' name='changePwdBtn' onClick="validateForm(this.form)">Change Password</button>
	     <a href='updateAccountData.php' style='text-decoration:none' id='updAccDataLbl' name='updAccDataLbl'>Update Account Details</a>
	   </form>
	</div>
	
	
	
	<div class='logo'>
	     <img border='#' alt='GalleryOnLogo' src='style/logo/GalleryOnLogo.png' width='450' height='150'>
	</div>
	
	</body>

</html>