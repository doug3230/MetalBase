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
			<h2>Results</h2>
			<p>Here I display the results of a search query.</p>
			<p>The results allow the user to access a band's, 
				album's, or song's individual page.</p>
			<p>
			<table cols=4 cellspacing="10">
				<?php
				$row = str_repeat("<td>Result</td>",8);
				echo str_repeat("<tr>$row</tr>",25)
				?>
			</table>
			</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
