function validateForm(form) {
	var pwdrecoveryemail = document.forms["pwdRecoveryForm"]["pwdResetEmailTxtFld"].value;
	if (pwdrecoveryemail == "") {
		alert("Enter Email address that you have used during Registration");
		return false;
	}
}