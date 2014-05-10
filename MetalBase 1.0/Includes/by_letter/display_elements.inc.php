<?php
try {
	$type = $_GET['type'];
	$letter = $_GET['letter'];
	if (!$row = $result->fetch())
		echo "<p>There are currently no " . $type . 
			"s with a name starting with &ldquo;". $letter . 
			"&rdquo; in the MetalBase system</p>";
	else
		include 'Includes/results_table.inc.php';
} catch (Exception $e) {
	echo '<p>Error displaying ' . $type . 's: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>