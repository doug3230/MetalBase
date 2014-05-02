<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<h2>Search by Name</h2>
		<p>Here I allow the user to browse results by the letter of the alphabet that they begin with.</p>
		<p><?php 
			for ($letter = 'A'; $letter < 'Z'; $letter++)
				echo "$letter ";
			echo "Z";
			?></p>
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
