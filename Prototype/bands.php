<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<h2>Bands on the Site</h2>
		<form><input type="text" /><input type="submit" value="Search bands" /></form>
		<p>Here I give the option to give a detailed search for a band with a name similar to the input text. <br />
			I allow the user to filter search results by genre, country, (<strong>Optional:</strong> and the 
			letter of the alphabet that the band's name starts with).</p>
		
		<p>I also provide links to individual pages for viewing
			<ul>
				<li><a href="search_by_name.php">
					bands by the letter of the alphabet that their name starts with</a></li>
				<li><a href="search_by_genre.php">
					bands by genre</a></li>
				<li><a href="search_by_country.php">
					bands by country</a></li>
			</ul>
			<strong>Optional:</strong> Have the 3 above subpages be integrated into the navigation zone in a
			manner that is pleasing to the user (a dropdown menu perhaps).</p>
		<p>This page also provides a link to the "Add a Band" page.</p>
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
