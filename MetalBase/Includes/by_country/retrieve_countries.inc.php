<?php
try {
	$sql = "SELECT id, name FROM country ORDER BY name";
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving countries:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>