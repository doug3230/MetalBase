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
			<h2>Add/Edit Band</h2>
			<p><form action="individual_band.php">
				<label for="bandname">Band Name:</label>
				<input type="text" name="bandname" id="bandname"/>
				<br />
				
				<label for="bandyear">Year of Formation:</label>
				<input type="text" name="bandyear" id="bandyear"/>
				<br />
				
				<label for="bandcountry">Country:</label>
				<input type="text" name="bandcountry" id="bandcountry"/>
				<br />
				
				<label for="bandnotes">Notes:</label><br />
				<textarea cols="40" rows="10">Blah blah blah. Here the user can edit this informative stuff.</textarea>
				<br />
				
				<input type="submit" value="save changes to band" />
			</form></p>
			
			<p><strong>Important:</strong>
				Genres, albums, songs, and links are not handled on the add page.
				The edit page provides an area that can be used to add/delete
				existing genres/albums/song relationships and links.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>