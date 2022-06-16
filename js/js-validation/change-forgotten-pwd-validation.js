function validateForm(form) {
	
	var emailusername = document.forms["changeForgottenPasswordForm"]["emailUsernameTxtFld"].value;
	if (emailusername == "") {
		alert("Enter Username or Email Address");
		return false;
	}
	
	var newpassword = document.forms["changeForgottenPasswordForm"]["newPasswordTxtFld"].value;
	if (newpassword == "") {
		alert("Enter New Password");
		return false;
	}
	
	var repeatnewpwd = document.forms["changeForgottenPasswordForm"]["repeatNewPwdTxtFld"].value;
	if (repeatnewpwd == "") {
		alert("Re-enter New Password");
		return false;
	}
}