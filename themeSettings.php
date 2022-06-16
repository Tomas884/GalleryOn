<?php
   include_once 'header.php';
   session_start();
?>

<!DOCTYPE html>
<html lang='en'>
   <head>
      <link href='style/css/themeSettings.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    
    <title>GalleryOn: Theme Settings</title>
   </head>
   
   <body>
   
      <div class='themeSettingsArea'>
	       
		   <input type='radio' id='lightDarkMode' name='lightDarkMode' value='LightMode' required>Light Mode:</input>
		   <input type='radio' id='lightDarkMode' name='lightDarkMode' value='DarkMode' required>Dark Mode:</input>
		   
		   <label>Select Custom Background Color:</label>
		   <label>Select Custom Background Image:</label>
		   <label>Browse for Image file and apply as Background:</label>
		   <label>Select Custom Color for Header:</label>
		   
		   <button>Browse for Image and Apply</button>
		   <button>Restore Back To Default</button>
		   
	  </div>
   
   </body>
   
</html>

change packground color
change background image by selecting web suggested images, upload picture or select from gallery uploads
light mode
dark mode (Default)