<?php
function retrieve_named_elements_alphabetically($table_name) {
	try {
		global $pdo;
		$sql = "SELECT id, name FROM $table_name ORDER BY name";
		$query_result = $pdo->query($sql);
		return $query_result;
	} catch (Exception $e) {
		echo '<p>Error retrieving ' . $table_name . 's:' . $e->retrieveMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_bands_alphabetically() {return retrieve_named_elements_alphabetically("band");}
function retrieve_albums_alphabetically() {return retrieve_named_elements_alphabetically("album");}
function retrieve_songs_alphabetically() {return retrieve_named_elements_alphabetically("song");}
function retrieve_countries_alphabetically() {return retrieve_named_elements_alphabetically("country");}
function retrieve_genres_alphabetically() {return retrieve_named_elements_alphabetically("genre");}

function retrieve_element_name($table_name, $id) {
	try {
		global $pdo;
		$sql = "SELECT name FROM $table_name WHERE id = $id";
		$names = $pdo->query($sql);
		$name_result = $names->fetch();
		return $name_result['name'];
	} catch (Exception $e) {
		echo "<p>Error retrieving $table_name with id $id: " . $e->retrieveMessage() . "</p>";
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_band_name($id) {return retrieve_element_name("band", $id);}
function retrieve_album_name($id) {return retrieve_element_name("album", $id);}
function retrieve_song_name($id) {return retrieve_element_name("song", $id);}
function retrieve_country_name($id) {return retrieve_element_name("country", $id);}
function retrieve_genre_name($id) {return retrieve_element_name("genre", $id);}

function retrieve_elements_having_property($type_name, $property_name ,$property_id) {
	try {
		global $pdo;
		$sql = "SELECT T.id AS id,T.name As name FROM $type_name" . 
				" AS T INNER JOIN $property_name ON T.countryid =" .
				"country.id WHERE T.countryid = $property_id";
		$result = $pdo->query($sql);
		return $result;
	} catch (Exception $e) {
		echo '<p>Error retrieving ' . $type . 's:' . $e->getMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_elements_from_country($type_name, $country_id) {return retrieve_elements_having_property($type_name, "country", $country_id);}
function retrieve_elements_from_genre($type_name, $genre_id) {return retrieve_elements_having_property($type_name, "genre", $genre_id);}

function retrieve_element($table_name, $id) {
	try {
		global $pdo;
		$sql = "SELECT * FROM $table_name WHERE id = $id";
		$result = $pdo->query($sql);
		return $result->fetch();
	} catch (Exception $e) {
		echo "<p>Error retrieving $table_name with id $id: " . $e->retrieveMessage() . "</p>";
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_band($id) {return retrieve_element("band", $id);}
function retrieve_album($id) {return retrieve_element("album", $id);}
function retrieve_song($id) {return retrieve_element("song", $id);}
function retrieve_country($id) {return retrieve_element("country", $id);}
function retrieve_genre($id) {return retrieve_element("genre", $id);}
function retrieve_link($id) {return retrieve_element("link", $id);}

function retrieve_source_target_names($target_name, $source_var, $sourceId) {
	try {
		global $pdo;
		$sql = "SELECT id, name FROM $target_name WHERE $source_var = $sourceId ORDER BY name";
		$query_result = $pdo->query($sql);
		return $query_result;
	} catch (Exception $e) {
		echo '<p>Error retrieving ' . $target_name . 's:' . $e->retrieveMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_band_album_names($id) {return retrieve_source_target_names("album", "bandId", $id);}
function retrieve_band_song_names($id) {return retrieve_source_target_names("song", "bandId", $id);}
function retrieve_album_song_names($id) {return retrieve_source_target_names("song", "albumId", $id);}

function retrieve_type_target_names($type_name, $target_name, $sourceId, $requested_vals) {
	try {
		global $pdo;
		$sql = "SELECT $requested_vals FROM $target_name WHERE sourceId = $sourceId AND sourceType = '$type_name'";
		$query_result = $pdo->query($sql);
		return $query_result;
	} catch (Exception $e) {
		echo '<p>Error retrieving ' . $target_name . 's:' . $e->retrieveMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
} 

function retrieve_type_genre_names($type, $id) {
	$genreIds = retrieve_type_target_names($type, "lookupgenre", $id, "genreId");
	$genres = array();
	while ($genreId = $genreIds->fetch())
		$genres[] = retrieve_genre_name($genreId['genreId']);
	return $genres;
}

function retrieve_band_genre_names($id) {return retrieve_type_genre_names("band", $id);}
function retrieve_album_genre_names($id) {return retrieve_type_genre_names("album", $id);}
function retrieve_song_genre_names($id) {return retrieve_type_genre_names("song", $id);}

function retrieve_band_links($id) {return retrieve_type_target_names("band", "link", $id, "id, url, description");}
function retrieve_album_links($id) {return retrieve_type_target_names("album", "link", $id, "id, url, description");}
function retrieve_song_links($id) {return retrieve_type_target_names("song", "link", $id, "id, url, description");}
?>