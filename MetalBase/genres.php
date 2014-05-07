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
			<h2>Genres in the Base</h2>
			<hr />
			<?php include 'Includes/connect_to_db.inc.php';
				  include 'Includes/genres/add_genre_if_POST.inc.php';
				  include 'Includes/genres/retrieve_genres.inc.php';
				  include 'Includes/genres/display_genres.inc.php'; ?>
			
			<form method="post" action="genres.php">
					<label for="new country">Add a new genre: </label>
					<input type="text" name="new_genre" id="new_genre"></input>
					<input type="submit" value="Submit"></input>
			</form>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
