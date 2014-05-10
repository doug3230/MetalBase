<?php
try {
	include_once 'Includes/retrieve_lib.inc.php';
	$result = retrieve_genres_alphabetically();
	if (!$row = $result->fetch())
		echo '<p>There are currently no genres in the MetalBase system</p>';
	else {
		echo '<p>The following are recognized as genres by MetalBase:</p>';
		$genre_name = $row['name'];
		$output = "<p><textarea type='text' rows='10' cols='50' disabled='disabled'>$genre_name";
		while ($row = $result->fetch()) {
			$genre_name = $row['name'];
			$output .= ", $genre_name";
		}
		$output .= "</textarea></p>";
		
		echo $output;
	}
} catch (Exception $e) {
	echo '<p>Error displaying genres: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>