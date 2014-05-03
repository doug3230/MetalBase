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
			<h2>Album Name</h2>
			<table border="1" cols="2">
				<tr><td>Year of Release</td><td>####</td></tr>
				<tr><td>Country</td><td>Somewhere</td></tr>
				<tr><td>Genres</td><td>a genre, another genre...</td></tr>
				<tr><td>Band</td><td><a href="individual_band.php">a band</a></td></tr>
				<tr><td>Songs</td><td>
				<a href="individual_song.php">a song</a>, 
				<a href="individual_song.php">another song</a>...</td></tr>
				<tr><td>Links</td><td>a link, another link...</td></tr>
			</table>
			<p><strong>Optional:</strong> Order the album's songs by track number.</p>
			<p><strong>Optional:</strong> Show the songs in a nice way with lengths.</p>
			<p><strong>Optional:</strong> Include album specific fields such as the length 
				of the album in minutes.</p>
			<p>Here is an area in which notes about the album are written:</p>
			<p><form>
				<textarea cols="40" rows="10">Blah blah blah. This is informative stuff.</textarea>
			</form></p>
			<p>Here there are links for editing the album's profile, and adding a new song to this album.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
