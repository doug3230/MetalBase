<?php
try {
	$type = $_GET['type'];
	$country = $_GET['country'];
	$sql = "SELECT T.id AS id,T.name As name FROM " . $type . 
			" AS T INNER JOIN country ON T.countryid = country.id WHERE T.countryid = " . $country;
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>