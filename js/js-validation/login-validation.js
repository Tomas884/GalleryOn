function validateForm(form) {
	var usernameOrEmail = document.forms["loginForm"]["username"].value;
	if (usernameOrEmail == "") {
		alert("Enter Username or Email Address");
		return false;
	}
	
	var password = document.forms["loginForm"]["password"].value;
	if (password == "") {
		alert("Enter Password");
		return false;
	}
	
}