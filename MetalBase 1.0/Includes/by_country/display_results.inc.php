<?php
try {
	include_once 'Includes/retrieve_lib.inc.php';
	$country_name = retrieve_country_name($_GET['country']);
	if (!$country_name)
		echo "<h3>Requested country does not exist.</h3>";
	else {
		echo '<h3>From the country ' . $country_name . ' :</h3>';
		$result = retrieve_elements_from_country($_GET['type'], $_GET['country']);
		if (!$row = $result->fetch())
			echo "<p>There are currently no " . $type . 
				"s from the country ". $country_name . 
				" in the MetalBase system</p>";
		else
			include 'Includes/results_table.inc.php';
	}
} catch (Exception $e) {
	echo '<p>Error displaying ' . $_GET['type'] . 's: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>