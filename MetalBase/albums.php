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
				$album = retrieve_album($_GET['id']);
				if (!$album) {
					echo "<p>The url refers to an album that does not exist.</p>";
					include "Includes/error.inc.php";
					exit();
				}
				echo "<h2>" . $album['name'] . "</h2>";
				echo "<hr />";
				include 'Includes/albums/display_album.inc.php';
			} else { 
				echo "<h2>Albums</h2>";
				echo "<hr />";
				$result = retrieve_albums_alphabetically();
				if (!$row = $result->fetch())
					echo "<p>There are currently no albums in the MetalBase system</p>";
				else {
					$type = "album";
					include 'Includes/results_table.inc.php';
				}
			} ?>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>