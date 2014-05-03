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
			<h2>Add/Edit Album</h2>
			<p><form action="individual_album.php">
				<label for="albumname">Album Name:</label>
				<input type="text" name="albumname" id="albumname"/>
				<br />
				
				<label for="albumyear">Year of Release:</label>
				<input type="text" name="albumyear" id="albumyear"/>
				<br />
				
				<label for="albumband">Band:</label>
				<input type="text" name="albumband" id="albumband"/>
				<br />
				
				<label for="albumcountry">Country:</label>
				<input type="text" name="albumcountry" id="albumcountry"/>
				<br />
				
				<label for="albumnotes">Notes:</label><br />
				<textarea cols="40" rows="10">Blah blah blah. Here the user can edit this informative stuff.</textarea>
				<br />
				
				<input type="submit" value="save changes to album" />
			</form></p>
			
			<p><strong>Important:</strong>
				Genres, songs, and links are not handled on the add page.
				The edit page provides an area that can be used to add/delete
				existing genre/song relationships and links.</p>
			
			<p><strong>Important:</strong> If the user arrives at the add album page by clicking
				a link to add an album for a band (for example). The appropriate fields (such as band and country)
				are filled out (but can be changed).</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>