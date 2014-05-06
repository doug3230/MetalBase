<?php
try {
	if(isset($_REQUEST['new_country'])) {
		$sql = "INSERT INTO country (name) VALUES (:country_name)";
		$s = $pdo->prepare($sql);
		
		$country_name = $_REQUEST['new_country'];
		$s->bindvalue(':country_name', $country_name);
		$s->execute();
		echo "<p><strong>$country_name successfully added to MetalBase.</strong></p>";
	}
} catch (Exception $e) {
	echo '<p>Error adding new country: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>