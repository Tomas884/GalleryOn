<?php
  session_start();
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
	    <link href='style/css/styleDeleteAccount.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
	
	<script src='js/js-validation/delete-acc-validation.js'></script>
    
    <title>GalleryOn: Delete Account</title>
	</head>
	
	<body>
	   <div class='logo'>
	     <img border='#' alt='GalleryOnLogo' src='style/logo/GalleryOnLogo.png' width='450' height='150'>
	</div>
	
	<div class='deleteAccArea'>
	   <form action='php-oop/delete.php' method='post' name='deleteAccForm' onsubmit='return validateForm()'>
	      <div id='deleteAccLbl'><label>Delete Account:</label></div>
		  
		  <input type='text' id='delAccEmailUsrnameTxtFld' name='delAccEmailUsrnameTxtFld' placeholder='Email/Username'></input>
		  <input type='password' id='delAccPwd' name='delAccPwd' placeholder='Password'></input>
		  <input type='password' id='delAccRepeatPwdConfirm' name='delAccRepeatPwdConfirm' placeholder='Repeat Password to Confirm'></input>
		  
		  <button type='submit' id='delAccBtn' name='delAccBtn' onClick='validateForm(this.form)'>Delete My Account</button>
		  <div id='delAccOrLbl'><label>Or</label></div>
		  <button type='submit' id='delAccDeactivateBtn' name='delAccDeactivateBtn'>Deactivate My Account</button>
		</form>  
	</div>
	
	</body>
	
</html>