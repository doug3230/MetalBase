<?php
if(isset($_REQUEST['new_country'])) {
	include_once "Includes/insert_lib.inc.php";
	$country_name = $_REQUEST['new_country'];
	insert_country($country_name);
	echo "<h3>$country_name successfully added to MetalBase.</h3>";
}
?>