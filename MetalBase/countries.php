<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'Includes/headcontent.inc.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'Includes/titlezone.inc.php'; ?>
		
		<?php include 'Includes/navigationzone.inc.php'; ?>
		
		<div id="contentzone">
			<h2>Countries in the Base</h2>
			<hr />
			<p>The following are recognized as countries by MetalBase:</p>
			
			<p>
				<textarea type="text" rows="10" cols="50" disabled="disabled"></textarea>
			</p>
			<form method="post" action="countries.php">
					<label for="newCountry">Add a new country: </label>
					<input type="text" name="newCountry" id="new country"></input>
					<input type="submit"></input>
			</form>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
