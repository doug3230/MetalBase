<?php 
include 'Includes/connect_to_db.inc.php'; 
include_once 'Includes/retrieve_lib.inc.php';

$result = retrieve_countries_alphabetically();
if (!isset($result)) {
	echo "<p>There are currently no countries in the MetalBase system." .
			" Head over to the <a href='countries.php'>Add Country</a>" .
			" page and add some.</p>";
} else {?>
	<form method="get" action="">
	<input type="hidden" name="type" id="type" value="<?php echo $_GET['type'];?>" />
	<select name="country" id="country">
		<?php 
			while($row = $result->fetch()) {
				$country_id = $row['id'];
				$country_name = $row['name'];
				echo "<option value='$country_id'>$country_name</option>";
			}
		?>
	</select>
	<input type="submit" value="Submit" />
	</form>
<?php } ?>

