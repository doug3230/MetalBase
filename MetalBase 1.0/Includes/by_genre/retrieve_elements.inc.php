<?php
try {
	$type = $_GET['type'];
	$genre = $_GET['genre'];
	$sql = "SELECT T.id AS id,T.name As name FROM " . $type . " AS T " .
			"INNER JOIN lookupgenre ON T.id = lookupgenre.sourceid " .
			"INNER JOIN genre ON lookupgenre.genreid = genre.id " . 
			"WHERE genreid = " . $genre . " AND sourcetype = '" . $type . "'";
	$result = $pdo->query($sql);
} catch (Exception $e) {
	echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>