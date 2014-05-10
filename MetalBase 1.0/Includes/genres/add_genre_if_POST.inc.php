<?php
if(isset($_REQUEST['new_genre'])) {
	include_once "Includes/insert_lib.inc.php";
	$genre_name = $_REQUEST['new_genre'];
	insert_genre($genre_name);
	echo "<h3>$genre_name successfully added to MetalBase.</h3>";
}
?>