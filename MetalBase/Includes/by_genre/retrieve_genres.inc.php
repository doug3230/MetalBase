<?php
try {
	$sql = "SELECT id, name FROM genre ORDER BY name";
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving genres:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>