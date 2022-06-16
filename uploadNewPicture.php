<?php
   include_once 'header.php';
   session_start();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	    <link href='style/css/styleUploadNewPicture.css' rel='stylesheet' type='text/css'/>
    <meta charset="utf-8" />
    <link rel="icon" href="style/logo/logo.png" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    
    <title>GalleryOn: Upload Picture</title>
	</head>
	
	<body>
	
	<div class='uploadPictureArea'>
	    <input type='text' id='pictureTitleTxtFld' name='pictureTitleTxtFld' placeholder='Picture Title'></input>
		<textarea id='descriptionAboutPicture' name='descriptionAboutPicture' rows='4' cols='50' placeholder='Description about Picture'></textarea>
		<select id='publicPrivateSelect' name='publicPrivateSelect' onchange='checkforblank()'>
		<option selected hidden value="">Public/Private</option>
		<option value='public'>Public</option>
		<option value='private'>Private</option>
		</select>
		<div id='selectedPictureArea'></div>
		<button id='browsePictureFileBtn' name='browsePictureFileBtn'>Browse</button>
		<button id='uploadNewImgBtn' name='uploadNewImgBtn'>Upload</button>
	</div>
	
	</body>

</html>