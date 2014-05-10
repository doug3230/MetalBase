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
				$song = retrieve_song($_GET['id']);
				if (!$song) {
					echo "<p>The url refers to a song that does not exist.</p>";
					include "Includes/error.inc.php";
					exit();
				}
				echo "<h2>" . $song['name'] . "</h2>";
				echo "<hr />";
				include 'Includes/songs/display_song.inc.php';
				echo "<a href='edit_song.php?id=" . $song['id'] . 
					"'>Edit " . $song['name'] . "</a>";
			} else { 
				echo "<h2>Songs</h2>";
				echo "<hr />";
				$result = retrieve_songs_alphabetically();
				if (!$row = $result->fetch())
					echo "<p>There are currently no songs in the MetalBase system</p>";
				else {
					$type = "song";
					include 'Includes/results_table.inc.php';
				}
			} ?>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>