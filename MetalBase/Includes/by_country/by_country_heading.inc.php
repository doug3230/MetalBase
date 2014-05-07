<?php
if (!isset($_GET['type']))
	echo "Search by Country";
else
	echo ucfirst($_GET['type']) . "s by Country";
?>