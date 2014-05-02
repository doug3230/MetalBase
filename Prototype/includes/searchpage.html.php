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
			<form><input type="text" /><input type="submit" value="<?php echo 'Search ' . ucfirst($element) . 's';?>" /></form>
			<p>Here I give the option to give a detailed search for <?php echo $element;?>s with a name similar to the input text. <br />
				I allow the user to filter search results by genre, country, (<strong>Optional:</strong> and the 
				letter of the alphabet that the <?php echo $element;?>'s name starts with).</p>
			
			<?php include 'includes/searchbyzone.html.php'; ?>
			
			<p>This page also provides a link to the "Add <?php echo ucfirst($element);?>" page.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
