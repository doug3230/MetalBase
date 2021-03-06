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
			<h2><?php echo ucfirst($element);?>s on the Site</h2>
			<p><form action="results.php">
				<input type="text" />
				<input type="submit" value="<?php echo 'Search ' . ucfirst($element) . 's';?>" />
			</form></p>
			<p>Here the user can perform a detailed search for <?php echo $element;?>s with a name that includes the input text. <br />
				The user is able to filter search results by genre, country, (<strong>Optional:</strong> and the 
				letter of the alphabet that the <?php echo $element;?>'s name starts with).</p>
			
			<?php include 'includes/searchbyzone.html.php'; ?>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
