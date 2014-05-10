<?php 
include 'Includes/connect_to_db.inc.php'; 
include 'Includes/by_genre/retrieve_genres.inc.php';

$type = $_GET['type'];
if (!isset($result)) {
	echo "<p>There are currently no genres in the MetalBase system." .
			" Head over to the <a href='genres.php'>Add Genre</a> page.</p>";
} else {?>
	<form method="get" action="">
	<input type="hidden" name="type" id="type" value="<?php echo $type;?>" />
	<select name="genre" id="genre">
		<?php 
			while($row = $result->fetch()) {
				$genre_id = $row['id'];
				$genre_name = $row['name'];
				echo "<option value='$genre_id'>$genre_name</option>";
			}
		?>
	</select>
	<input type="submit" value="Submit" />
	</form>
<?php } ?>

