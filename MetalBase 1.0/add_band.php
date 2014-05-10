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
			<h2>Add Band</h2>
			<hr />
			<?php 
			include 'Includes/connect_to_db.inc.php';
			if (!isset($_POST['posted'])) {
				include_once 'Includes/retrieve_lib.inc.php';
				$countries = retrieve_countries_alphabetically();
				if (!isset($countries))
					echo "<p>There are currently no countries in the MetalBase system." .
					" Head over to the <a href='countries.php'>Add Country</a> page.</p>";
				else
					include 'Includes/add_element/band_form.inc.php';
			} else {
				include_once 'Includes/insert_lib.inc.php';
				insert_band($_POST['name'], $_POST['year'], $_POST['country'], $_POST['description']);
				echo "<h3>Band successfully added to MetalBase</h3>";
				echo "<p><a href=''>add another</a></p>"; 
				echo "<p><a href='bands.php?id=" . 
					$pdo->lastInsertId() . "'>view the new band</a></p>";
			}?>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
