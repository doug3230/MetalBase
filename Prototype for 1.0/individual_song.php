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
			<h2>Song Name</h2>
			<table border="1" cols="2">
				<tr><td>Original Year of Release</td><td>####</td></tr>
				<tr><td>Country</td><td>Somewhere</td></tr>
				<tr><td>Genres</td><td>a genre, another genre...</td></tr>
				<tr><td>Band</td><td><a href="individual_band.php">a band</a></td></tr>
				<tr><td>Album</td><td><a href="individual_album.php">an album</a></td></tr>
				<tr><td>Links</td><td>a link, another link...</td></tr>
			</table>
			<p><strong>Optional:</strong> Allow a song to have multiple albums and/or multiple bands.</p>
			<p><strong>Optional:</strong> Include song specific fields such as the length 
				of the song in minutes.</p>
			<p>Here is an area in which notes about the song are written:</p>
			<p><form>
				<textarea cols="40" rows="10">Blah blah blah. This is informative stuff.</textarea>
			</form></p>
			<p>Here there is a link for <td><a href="add_or_edit_song.php">editing the song's profile</a>.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
