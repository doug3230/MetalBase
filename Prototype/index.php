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
			<h2>Welcome to the MetalBase Website!</h2>
			<p>Here the user can read a description of the site, what it is for, and how to use it.</p>
			<p>This page serves as an "About" page, and does not need to be dynamically changed over time.</p>
			
			<p>Links to the "Add" pages are also provided here:
				<table border="1">
					<tr>
						<td><a href="add_or_edit_band.php">Add Band</a></td>
						<td><a href="add_or_edit_album.php">Add Album</a></td>
						<td>Add Song</td>
						<td><a href="add_genre.php">Add Genre</a></td>
						<td><a href="add_country.php">Add Country</a></td>
					</tr>
				</table>
			</p>
			<p><strong>Optional:</strong> Allow the user to delete bands/albums/songs through the site.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
