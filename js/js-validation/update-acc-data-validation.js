function validateForm(form) {
	var firstname = document.forms["updateAccDataForm"]["updAccFirstNameTxtFld"].value;
	if (firstname == "") {
		alert("Enter First Name");
		return false;
	}
	
	var secondname = document.forms["updateAccDataForm"]["updAccSecondNameTxtFld"].value;
	if (secondname == "") {
		alert("Enter Second/Middle Name");
		return false;
	}
	
	var lastname = document.forms ["updateAccDataForm"]["updAccLastNameTxtFld"].value;
	if (lastname == "") {
		alert("Enter Surname");
		return false;
	}
	
	var email = document.forms["updateAccDataForm"]["updAccEmailTxtFld"].value;
	if (email == "") {
		alert("Enter Email Address");
		return false;
	}
	
	var phone = document.forms["updateAccDataForm"]["updAccPhoneNoTxtFld"].value;
	if (phone == "") {
		alert("Enter Phone Number");
		return false;
	}
	
	var username = document.forms["updateAccDataForm"]["updAccUsernameTxtFld"].value;
	if (username == "") {
		alert("Enter Username");
		return false;
	}
	
	var usernameoremail = document.forms["updateAccDataForm"]["confirmUsernameOrEmail"].value;
	if (usernameoremail == "") {
		alert("Enter current Email address or Username to confirm changes of your account details");
		return false;
	}
	
	var password = document.forms["updateAccDataForm"]["confirmPwd"].value;
	if (password == "") {
		alert("Enter Password to confirm changes of your account details");
		return false;
	}
	
}