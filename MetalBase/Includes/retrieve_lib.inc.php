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
?>