function validateForm(form) {
	var firstName = document.forms["registerForm"]["firstNameTxtFld"].value;
	if (firstName == "") {
		alert("Enter First Name");
		return false;
	}
	
	var secondName = document.forms["registerForm"]["secondNameTxtFld"].value;
	if (secondName == "") {
		alert("Enter Second/Middle Name");
		return false;
	}
	
	var lastName = document.forms["registerForm"]["lastNameTxtFld"].value;
	if (lastName == "") {
		alert("Enter Last Name / Surname");
		return false;
	}
	
	var email = document.forms["registerForm"]["emailTxtFld"].value;
	if (email == "") {
		alert("Enter Email Address");
		return false;
	}
	
	var phoneNum = document.forms["registerForm"]["phoneNoTxtFld"].value;
	if (phoneNum == "") {
		alert("Enter Phone Number");
		return false;
	}
	
	var username = document.forms["registerForm"]["usernameTxtFld"].value;
	if (username == "") {
		alert("Enter Username");
		return false;
	}
	
	var password = document.forms["registerForm"]["pwd"].value;
	if (password == "") {
		alert("Enter Password");
		return false;
	}
	
	var repeatPassword = document.forms["registerForm"]["repeatPwd"].value;
	if (repeatPassword == "") {
		alert("Re-enter Password");
		return false;
	}
	
	if ((form.regTermsAndCondCheckBox.checked == false)) {
		alert("Click on tick box to agree with terms and conditions in order to proceed with registration");
		return false;
	}
	
}