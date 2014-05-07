<?php
try {
	$type = $_GET['type'];
	$letter = $_GET['letter'];
	$sql = "SELECT id,name FROM " . $type . 
			" WHERE LOWER(name) LIKE '" . strtolower($letter) . "%'";
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>