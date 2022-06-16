<?php
   include_once 'header.php';
   session_start();
?>

<!DOCTYPE html>
<html lang='en'>
     
	 <head>
	     <link href='style/css/myAccData.css' rel='stylesheet' type='text/css'/>
         <meta charset="utf-8" />
         <link rel="icon" href="style/logo/logo.png" /> 
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <meta name="theme-color" content="#000000" />
		 <title>GalleryOn: My Account Details</title>
	 </head>
	 
	 <body>
	 
		
		<div class='myAccDetailsArea'>
		
		<?php
		   echo "<b>First Name:</b>" . $_SESSION["userfirstname"];
		   echo "<b>Second Name:</b>" . $_SESSION["usersecondname"];
		   echo "<b>Last Name:</b>" . $_SESSION["userlastname"];
		   echo "<b>Email:</b>" . $_SESSION["useremail"];
		   echo "<b>Phone:</b>" . $_SESSION["userphoneno"];
		   echo "<b>Username:</b>" . $_SESSION["userusername"];
		   echo "<b>Password:</b>" . $_SESSION["userpassword"];
		?>
		
		    <a href='updateAccountData.php' style='text-decoration:none' id='updateDataLink' name='updateDataLink'>Update Account Details</a>
			<a href='changePwd.php' style='text-decoration:none' id='changePasswordLink' name='changePasswordLink'>Change Account Password</a>
		
		</div>
	 
	 </body>


</html>