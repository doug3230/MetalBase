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
			<h2>Search by Country</h2>
			<p>Here the user is able to browse results by the country that they originate from.</p>
			<p><strong>Optional:</strong> One band/album/song can have multiple countries.</p>
			<p><?php 
				$countries = array('Canada', 'Germany', 'England', 'United States', 'Japan');
				for ($i = 0; $i < count($countries) - 1; $i++)
					echo "<a href='results.php'>$countries[$i]</a>, ";
				$lastcountry = end($countries);
				echo "<a href='results.php'>$lastcountry</a>";
				?></p>
			<p>Countries are stored in the database system and new countries can be added using a link on the home page.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
