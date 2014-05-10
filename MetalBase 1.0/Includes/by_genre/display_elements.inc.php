<?php
try {
	$type = $_GET['type'];
	$genre = $_GET['genre'];
	$genre_name = $name_result['name'];
	if (!$row = $result->fetch())
		echo "<p>There are currently no " . $type . 
			"s of the genre ". $genre_name . 
			" in the MetalBase system</p>";
	else
		include 'Includes/results_table.inc.php';
} catch (Exception $e) {
	echo '<p>Error displaying ' . $type . 's: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>