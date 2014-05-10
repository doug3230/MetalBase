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
			<h2>Add/Edit Song</h2>
			<p><form action="individual_song.php">
				<label for="songname">Song Name:</label>
				<input type="text" name="songname" id="songname"/>
				<br />
				
				<label for="songyear">Year of Release:</label>
				<input type="text" name="songyear" id="songyear"/>
				<br />
				
				<label for="songband">Band:</label>
				<input type="text" name="songband" id="songband"/>
				<br />
				
				<label for="songband">Album:</label>
				<input type="text" name="songband" id="songband"/>
				<br />
				
				<label for="songcountry">Country:</label>
				<input type="text" name="songcountry" id="songcountry"/>
				<br />
				
				<label for="songnotes">Notes:</label><br />
				<textarea cols="40" rows="10">Blah blah blah. Here the user can edit this informative stuff.</textarea>
				<br />
				
				<input type="submit" value="save changes to song" />
			</form></p>
			
			<p><strong>Important:</strong>
				Genres and links are not handled on the add page.
				The edit page provides an area that can be used to add/delete
				existing genre relationships and links.</p>
			
			<p><strong>Important:</strong> If the user arrives at the add song page by clicking
				a link to add a song for an album (for example). The appropriate fields (such as band, album 
				and country) are filled out (but can be changed).</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>