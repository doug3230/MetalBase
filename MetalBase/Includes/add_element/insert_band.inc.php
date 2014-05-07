<?php
try {
	$name = $_POST['name'];
	$year = $_POST['year'];
	$country = $_POST['country'];
	$description = $_POST['description'];
	
	$sql = "INSERT INTO `band`(`name`, `year`, `countryId`, `description`) " . 
			"VALUES ('$name', $year, $country, '$description')";
	$pdo->exec($sql);
} catch (PDOException $e) {
	echo '<p>Error adding band:' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>