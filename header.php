<?php
  session_start();
?>
<html>
    <body>
	   <link href='style/css/styleHeader.css' rel='stylesheet' type='text/css'/>
	   <header>
	   
	       <div class='logo'>
	     <img border='#' alt='GalleryOnLogo' src='style/logo/GalleryOnLogo.png' width='250' height='100'>
	    </div>
		
		<?php
		  if (isset($_SESSION["userid"])) {
		?>
		      <a href='about.html' style='text-decoration:none' id='aboutLink' name='aboutLink'>About</a>
			  <a href='MyGallery.php' style='text-decoration:none' id='myGalleryLink' name='myGalleryLink'>My Gallery</a>
			  <a href='php-oop/signout.php' style='text-decoration:none' id='signout' name='signout'>Sign Out</a>
			  <a href='settings.php' style='text-decoration:none' id='settingsLink' name='settingsLink'>Settings</a>
		  <?php
		  } else {
		  ?>
		  <a href='about.html' style='text-decoration:none' id='aboutLink' name='aboutLink'>About</a>
		  <a href='login.html' style='text-decoration:none' id='loginLink' name='loginLink'>Sign In</a>
		  <a href='register.html' style='text-decoration:none' id='registerLink' name='registerLink'>Sign Up</a>
		  <?php
		  }
		  ?>
		
		<input type='text' id='searchTxtFld' name='searchTxtFld' placeholder='Search'></input>
		<button id='searchBtn' name='searchBtn'>Search</button>
		
	   </header>
	</body>
</html>