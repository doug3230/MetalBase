<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'Includes/headcontent.inc.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'Includes/titlezone.inc.php'; ?>
		
		<?php include 'Includes/navigationzone.inc.php'; ?>
		
		<div id="contentzone">
			<h2><?php include 'Includes/by_genre/by_genre_heading.inc.php'; ?></h2>
			<hr />
			
			<p><?php 
			if (!isset($_GET['type']))
				include 'Includes/choose_type.inc.php';
			elseif (!isset($_GET['genre'])) {
				echo '<h3>Select a genre:</h3>';
				include 'Includes/by_genre/choose_genre.inc.php';
			}
			else {
				/*To do: obtain results */
			}
			?></p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>