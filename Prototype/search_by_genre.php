<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<h2>Search by Genre</h2>
		<p>Here I allow the user to browse results by the genre that they are associated with.</p>
		<p><strong>Important:</strong> One band/album/song can have multiple genres.
		<p><?php 
			$genres = array('Classic Metal', 'NWoBHM', 'Power Metal', 'Thrash Metal', 'Death Metal');
			for ($i = 0; $i < count($genres) - 1; $i++)
				echo "$genres[$i], ";
			echo end($genres);
			?></p>
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
