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
				echo "<p>No album specified.</p>";
				include 'Includes/error.inc.php';
				exit();
			}
			
			include 'Includes/connect_to_db.inc.php';
			include_once 'Includes/retrieve_lib.inc.php';
			include_once 'Includes/insert_lib.inc.php';
			$album = retrieve_album($_GET['id']);
			if (!$album) {
				echo "<p>The url refers to an album that does not exist.</p>";
				include "Includes/error.inc.php";
				exit();
			} ?>
			
			<h2><?php echo "Edit " . $album['name'];?></h2>
			<hr />
			<?php
			if (isset($_POST['edit'])) {
				update_album($_GET['id'], $_POST['name'], $_POST['year'], 
					$_POST['country'], $_POST['band'], $_POST['description']);
				$album = retrieve_album($_GET['id']);
			} elseif (isset($_POST['add_link']))
				insert_link($_GET['id'], $_POST['url'], $_POST['urldescription'], "album");
			elseif (isset($_POST['add_genre'])) {
				echo $_POST['genre'];
				insert_genre_relationship($_GET['id'], $_POST['genre'], "album"); 
			}
			include 'Includes/albums/edit_album_forms.inc.php';?>
			
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
