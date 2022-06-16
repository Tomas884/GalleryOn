function validateForm(form) {
	var email = document.forms["changePasswordForm"]["pwdChngEmailUsrTxtFld"].value;
	if (email == "") {
		alert("Enter Email Address");
		return false;
	}
	
	var oldPassword = document.forms["changePasswordForm"]["pwdChngOldPwdTxtFld"].value;
	if (oldPassword == "") {
		alert("Enter Current Password");
		return false;
	}
	
	var newPassword = document.forms["changePasswordForm"]["pwdChngNewPwdTxtFld"].value;
	if (newPassword == "") {
		alert("Enter New Password");
		return false;
	}
	
	var repeatNewPassword = document["changePasswordForm"]["pwdChngRepeatNewPwdTxtFld"].value;
	if (repeatNewPassword == "") {
		alert("Re-enter New Password");
		return false;
	}
	
}