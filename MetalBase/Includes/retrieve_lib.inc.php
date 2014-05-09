<?php
function retrieve_elements($table_name) {
	try {
		$sql = "SELECT id, name FROM $table_name ORDER BY name";
		$query_result = $pdo->query($sql);
		return $query_result;
	} catch (Exception $e) {
		echo '<p>Error retrieving ' . $table_name . 's:' . $e->retrieveMessage() . '</p>';
		include 'Includes/error.inc.php';
		exit();
	}
}

function retrieve_bands() {return retrieve_elements("band");}
function retrieve_albums() {return retrieve_elements("album");}
function retrieve_songs() {return retrieve_elements("song");}
function retrieve_countries() {return retrieve_elements("country");}
function retrieve_genres() {return retrieve_elements("genre");}

function retrieve_element_name($table_name, $id) {
	try {
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

function retrieve_band_name($id) {return retrieve_element_name("band");}
function retrieve_album_name($id) {return retrieve_element_name("album");}
function retrieve_song_name($id) {return retrieve_element_name("song");}
function retrieve_country_name($id) {return retrieve_element_name("country");}
function retrieve_genre_name($id) {return retrieve_element_name("genre");}
?>