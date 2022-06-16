function validateForm(form) {
	var emailOrUsername = document.forms["deleteAccForm"]["delAccEmailUsrnameTxtFld"].value;
	if (emailOrUsername == "") {
		alert("Enter Email Address or Username");
		return false;
	}
	
	var password = document.forms["deleteAccForm"]["delAccPwd"].value;
	if (password == "") {
		alert("Enter Password");
		return false;
	}
	
	var repeatPassword = document.forms["deleteAccForm"]["delAccRepeatPwdConfirm"].value;
	if (repeatPassword == "") {
		alert("Re-enter Password");
		return false;
	}
}