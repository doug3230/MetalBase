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
			<h2><?php include 'Includes/by_letter/by_letter_heading.inc.php'; ?></h2>
			<hr />
			
			<p><?php 
			if (!isset($_GET['type']))
				include 'Includes/choose_type.inc.php';
			elseif (!isset($_GET['letter'])) {
				echo '<h3>Select a letter:</h3>';
				include 'Includes/by_letter/choose_letter.inc.php';
			}
			else {
				echo '<h3>Starting with letter &ldquo;' . $_GET['letter'] . '&rdquo; :</h3>';
				include 'Includes/connect_to_db.inc.php';
				include 'Includes/by_letter/retrieve_elements.inc.php';
				include 'Includes/by_letter/display_elements.inc.php';
			}
			?></p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>