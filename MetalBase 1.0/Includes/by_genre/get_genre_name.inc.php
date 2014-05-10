<?php
try {
	$type = $_GET['type'];
	$genre = $_GET['genre'];
	$sql = "SELECT name FROM genre WHERE id = $genre";
	$names = $pdo->query($sql);
	$name_result = $names->fetch();
} catch (Exception $e) {
	echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>