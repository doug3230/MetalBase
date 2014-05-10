<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=metalbase', 'mbuser', 'mbpassword');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo '<p>Error connecting to the database server: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>