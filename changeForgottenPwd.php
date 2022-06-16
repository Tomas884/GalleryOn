<!DOCTYPE html>
<html lang='en'>

  <head>
     <link href='style/css/styleChangeForgottenPwd.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
	
	<script src='js/js-validation/change-forgotten-pwd-validation.js'></script>
    
    <title>GalleryOn: Change Forgotten Password</title>
  </head>

   <body>
   
      <div class='logo'>
	     <img border='#' alt='GalleryOnLogo' src='style/logo/GalleryOnLogo.png' width='450' height='150'>
	  </div>
	  
	  <div id='changeForgottenPwdArea'>
	    <form action='php-oop/changeForgottenPwd.php' method='post' name='changeForgottenPasswordForm' onsubmit='return validateForm()'>
	     <div id='changeForgottenPwdLbl'><label>Change Forgotten Password:</label></div>
		 
		 <input type='text' id='emailUsernameTxtFld' name='emailUsernameTxtFld' placeholder='Email/Username'></input>
		 <input type='password' id='newPasswordTxtFld' name='newPasswordTxtFld' placeholder='New Password'></input>
		 <input type='password' id='repeatNewPwdTxtFld' name='repeatNewPwdTxtFld' placeholder='Repeat New Password'></input>
		 <button type='submit' id='changeForgottenPwdBtn' name='changeForgottenPwdBtn' onClick='validateForm(this.form)'>Change Forgotten Password</button>
	    </form>  
	  </div>
   
   </body>

</html>