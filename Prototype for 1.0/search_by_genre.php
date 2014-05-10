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
			<h2>Search by Genre</h2>
			<p>Here the user is able to browse results by the genre that they are associated with.</p>
			<p><strong>Important:</strong> One band/album/song can have multiple genres.</p>
			<p><?php 
				$genres = array('Classic Metal', 'NWoBHM', 'Power Metal', 'Thrash Metal', 'Death Metal');
				for ($i = 0; $i < count($genres) - 1; $i++)
					echo "<a href='results.php'>$genres[$i]</a>, ";
				$lastgenre = end($genres);
				echo "<a href='results.php'>$lastgenre</a>";
				?></p>
			<p>Genres are stored in the database system and new genres can be added using a link on the home page.</p>
		</div> <!-- End of contentzone div -->
			
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
