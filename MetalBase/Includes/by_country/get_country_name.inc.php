<?php
try {
	$type = $_GET['type'];
	$country = $_GET['country'];
	$sql = "SELECT name FROM country WHERE id = $country";
	$names = $pdo->query($sql);
	$name_result = $names->fetch();
} catch (Exception $e) {
	echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>