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

function insert_country($name) {insert_simple_named_value("country", $name);}
function insert_genre($name) {insert_simple_named_value("genre", $name);}

function insert_band($name, $year, $countryId, $description) {
	try {
		global $pdo;
		$sql = "INSERT INTO `band`(`name`, `year`, `countryId`, `description`) " . 
				"VALUES ('$name', $year, $countryId, '$description')";
		$pdo->exec($sql);
	} catch (PDOException $e) {
		echo '<p>Error adding band:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function insert_album($name, $year, $countryId, $bandId, $description) {
	try {
		global $pdo;
		$sql = "INSERT INTO `album`(`name`, `year`, `countryId`, `bandId`, `description`) " . 
				"VALUES ('$name', $year, $countryId, $bandId, '$description')";
		$pdo->exec($sql);
	} catch (PDOException $e) {
		echo '<p>Error adding album:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function insert_song($name, $year, $countryId, $bandId, $albumId, $description) {
	try {
		global $pdo;
		$sql = "INSERT INTO `song`(`name`, `year`, `countryId`, `bandId`, `albumId`, `description`) " . 
				"VALUES ('$name', $year, $countryId, $bandId, $albumId, '$description')";
		$pdo->exec($sql);
	} catch (PDOException $e) {
		echo '<p>Error adding song:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function insert_link($sourceId, $url, $description, $sourceType) {
	try {
		global $pdo;
		$sql = "INSERT INTO `link`(`sourceid`, `url`, `description`, `sourcetype`) " . 
				"VALUES ($sourceId, '$url', '$description', '$sourcetype')";
		$pdo->exec($sql);
	} catch (PDOException $e) {
		echo '<p>Error adding link:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function insert_genre_relationship($sourceId, $genreId, $sourceType) {
	try {
		global $pdo;
		$sql = "INSERT INTO `lookupgenre`(`sourceId`, `genreId`, `sourcetype`) " . 
				"VALUES ($sourceId, $genreId, '$sourcetype')";
		$pdo->exec($sql);
	} catch (PDOException $e) {
		echo '<p>Error adding genre relationship:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}
?>