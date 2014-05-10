<?php
if (!isset($_GET['type']))
	echo "Search by Genre";
else
	echo ucfirst($_GET['type']) . "s by Genre";
?>