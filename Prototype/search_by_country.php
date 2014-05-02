<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<h2>Search by Country</h2>
		<p>Here I allow the user to browse results by the country that they originate from.</p>
		<p><strong>Optional:</strong> One band/album/song can have multiple countries.</p>
		<p><?php 
			$countries = array('Canada', 'Germany', 'England', 'United States', 'Japan');
			for ($i = 0; $i < count($countries) - 1; $i++)
				echo "$countries[$i], ";
			echo end($countries);
			?></p>
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
