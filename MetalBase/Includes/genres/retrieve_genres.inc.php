<?php
try {
	$sql = 'SELECT name FROM Genre ORDER BY name';
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving genres: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>