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
			if (!isset($_GET['id'])) {
				echo "<p>No song specified.</p>";
				include 'Includes/error.inc.php';
				exit();
			}
			
			include 'Includes/connect_to_db.inc.php';
			include_once 'Includes/retrieve_lib.inc.php';
			include_once 'Includes/insert_lib.inc.php';
			$song = retrieve_song($_GET['id']);
			if (!$song) {
				echo "<p>The url refers to a song that does not exist.</p>";
				include "Includes/error.inc.php";
				exit();
			} ?>
			
			<h2><?php echo "Edit " . $song['name'];?></h2>
			<hr />
			<?php
			if (isset($_POST['edit'])) {
				update_song($_GET['id'], $_POST['name'], $_POST['year'], 
					$_POST['country'], $_POST['band'], $_POST['album'], $_POST['description']);
				$song = retrieve_song($_GET['id']);
			} elseif (isset($_POST['add_link']))
				insert_link($_GET['id'], $_POST['url'], $_POST['urldescription'], "song");
			elseif (isset($_POST['add_genre'])) {
				echo $_POST['genre'];
				insert_genre_relationship($_GET['id'], $_POST['genre'], "song"); 
			}
			include 'Includes/songs/edit_song_forms.inc.php';
			echo "<a href='songs.php?id=" . $song['id'] . 
					"'>Back to " . $song['name'] . "</a>";?>
			
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
