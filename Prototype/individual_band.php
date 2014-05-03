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
			<h2>Band Name</h2>
			<table border="1" cols="2">
				<tr><td>Year of Formation</td><td>####</td></tr>
				<tr><td>Country</td><td>Somewhere</td></tr>
				<tr><td>Genres</td><td>a genre, another genre...</td></tr>
				<tr><td>Albums</td><td>
				<a href="individual_album.php">an album</a>, 
				<a href="individual_album.php">another album</a>...</td></tr>
				<tr><td>Songs</td><td>
				<a href="individual_song.php">a song</a>, 
				<a href="individual_song.php">another song</a>...</td></tr>
				<tr><td>Links</td><td>a link, another link...</td></tr>
			</table>
			<p><strong>Optional:</strong> Order the band's albums and songs by year, name, and then id.</p>
			<p><strong>Optional:</strong> Maybe only show a few songs/albums so that the table doesn't look ugly
				and provide a page for all albums/songs by the band.</p>
			<p>Here is an area in which notes about the band are written:</p>
			<p><form>
				<textarea cols="40" rows="10">Blah blah blah. This is informative stuff.</textarea>
			</form></p>
			<p>Here there are links for editing the band's profile, 
				adding an album for this band, and adding a song for this band.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
