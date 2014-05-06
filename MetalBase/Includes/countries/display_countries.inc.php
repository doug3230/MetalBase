<?php
try {
	if (!$row = $result->fetch())
		echo '<p>There are currently no countries in the MetalBase system</p>';
	else {
		echo '<p>The following are recognized as countries by MetalBase:</p>';
		$country_name = $row['name'];
		$output = "<p><textarea type='text' rows='10' cols='50' disabled='disabled'>$country_name";
		while ($row = $result->fetch()) {
			$country_name = $row['name'];
			$output .= ", $country_name";
		}
		$output .= "</textarea></p>";
		
		echo $output;
	}
} catch (Exception $e) {
	echo '<p>Error displaying countries: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>