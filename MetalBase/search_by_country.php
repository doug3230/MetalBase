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
			<h2><?php include 'Includes/by_country/by_country_heading.inc.php'; ?></h2>
			<hr />
			
			<p><?php 
			if (!isset($_GET['type']))
				include 'Includes/choose_type.inc.php';
			elseif (!isset($_GET['country'])) {
				echo '<h3>Select a country:</h3>';
				include 'Includes/by_country/choose_country.inc.php';
			}
			else {
				include 'Includes/connect_to_db.inc.php';
				include 'Includes/by_country/get_country_name.inc.php';
				if (!$name_result)
					echo "<h3>Requested country does not exist.</h3>";
				else {
					$country_name = $name_result['name'];
					echo '<h3>From the country ' . $country_name . ' :</h3>';
					include 'Includes/by_country/retrieve_elements.inc.php';
					include 'Includes/by_country/display_elements.inc.php';
				}
			}
			?></p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>