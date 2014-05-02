<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<div id="contentzone">
			<h3>Here is the content zone. Its purpose varies from page to page.</h3>
			<h2>Search by Name</h2>
			<p>Here the user is able to browse results by the letter of the alphabet that they begin with.</p>
			<p><?php 
				for ($letter = 'A'; $letter < 'Z'; $letter++)
					echo "<a href='results.php'>$letter</a>, ";
				echo "<a href='results.php'>Z</a>";
				?></p>
			<p>All letters are listed even if there is no result that starts with a given letter.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
