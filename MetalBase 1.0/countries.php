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
			<?php include 'Includes/connect_to_db.inc.php';
				  include 'Includes/countries/add_country_if_POST.inc.php';
				  include 'Includes/countries/display_countries.inc.php'; ?>
			
			<form method="post" action="countries.php">
					<label for="new country">Add a new country: </label>
					<input type="text" name="new_country" id="new_country"></input>
					<input type="submit" value="Submit"></input>
			</form>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
