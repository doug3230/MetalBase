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
			<?php 
			include 'Includes/connect_to_db.inc.php';
			include_once 'Includes/retrieve_lib.inc.php';
			if (isset($_GET['id'])) {
				$band = retrieve_band($_GET['id']);
				if (!$band) {
					echo "<p>The url refers to a band that does not exist.</p>";
					include "Includes/error.inc.php";
					exit();
				}
				echo "<h2>" . $band['name'] . "</h2>";
				echo "<hr />";
				include 'Includes/bands/display_band.inc.php';
				echo "<a href='edit_band.php?id=" . $band['id'] . 
					"'>Edit " . $band['name'] . "</a>";
			} else { 
				echo "<h2>Bands</h2>";
				echo "<hr />";
				$result = retrieve_bands_alphabetically();
				if (!$row = $result->fetch())
					echo "<p>There are currently no bands in the MetalBase system</p>";
				else {
					$type = "band";
					include 'Includes/results_table.inc.php';
				}
			} ?>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>