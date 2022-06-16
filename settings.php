<?php
   include_once 'header.php';
   session_start();
?>

<!DOCTYPE html>
<html lang='en'>

    <head>
	   <link href='style/css/styleSettings.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    
    <title>GalleryOn: Settings</title>
	</head>
	
	<body>
	
	   <div class='settingsArea'>
	       <div id='accSettingsLbl'><label>Account Settings:</label></div>
		   
		   <a href='changePwd.php' style='text-decoration:none' id='changePwdLink' name='changePwdLink'>Change Password</a>
		   <a href='deleteAccount.php' style='text-decoration:none' id='deleteAccLink' name='deleteAccLink'>Delete/Deactivate Account</a>
		   <a href='updateAccountData.php' style='text-decoration:none' id='updatAccDataLink' name='updatAccDataLink'>Update Account Data</a>
		   <a href='myAccData.php' style='text-decoration:none' id='myAccDataLink' name='myAccDataLink'>My Account Details</a>
		   <a href='themeSettings.php' style='text-decoration:none' id='themeSettingsLink' name='themeSettingsLink'>Theme Settings</a>
		   <a href='help.html' style='text-decoration:none' id='helpLink' name='helpLink'>Help</a>
		   <a href='php-oop/signout.php' style='text-decoration:none' id='signoutLink' name='signoutLink'>Sign Out</a>
		   
	   </div>
	
	</body>

</html>