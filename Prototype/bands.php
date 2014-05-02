<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<h2>Bands on the Site</h2>
		<form><input type="text" /><input type="submit" value="Search bands" /></form>
		<p>Here I give the option to give a detailed search for a band with a name similar to the input text. <br />
			I allow the user to filter search results by genre, country, (<strong>Optional:</strong> and the 
			letter of the alphabet that the band's name starts with).</p>
		
		<?php include 'includes/searchbyzone.html.php'; ?>
		
		<p>This page also provides a link to the "Add a Band" page.</p>
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
