<?php
try {
	if(isset($_REQUEST['new_genre'])) {
		$sql = "INSERT INTO Genre (name) VALUES (:genre_name)";
		$s = $pdo->prepare($sql);
		
		$genre_name = $_REQUEST['new_genre'];
		$s->bindvalue(':genre_name', $genre_name);
		$s->execute();
		echo "<p><strong>$genre_name successfully added to MetalBase.</strong></p>";
	}
} catch (Exception $e) {
	echo '<p>Error adding new genre: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>