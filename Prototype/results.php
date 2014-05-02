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
			<p>Here the results of a search query are displayed.</p>
			<p>The results allow the user to access a band's, 
				album's, or song's individual page.</p>
			<p>
			<table cols=4 cellspacing="10">
				<?php
				$row = str_repeat("<td>Result</td>",8);
				echo str_repeat("<tr>$row</tr>",5)
				?>
			</table>
			</p>
			<p><strong>Optional:</strong> Output results in a one-by-one row format that lists result attributes so that
				results sharing the same name do not cause confusion (song covers for example).</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
