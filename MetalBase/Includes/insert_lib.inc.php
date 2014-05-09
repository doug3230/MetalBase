<?php
function insert_simple_named_value($table_name, $name) {
	try {
		global $pdo;
		$sql = "INSERT INTO $table_name (name) VALUES (:value_name)";
		$s = $pdo->prepare($sql);
		$s->bindvalue(':value_name', $name);
		$s->execute();
	} catch (Exception $e) {
		echo "<p>Error adding new $table_name" . ": " . $e->getMessage() . "</p>";
		include 'Includes/error.inc.php';
		exit();
	}
}

function insert_country($name) {insert_simple_named_value("country",$name);}
function insert_genre($name) {insert_simple_named_value("genre",$name);}
?>