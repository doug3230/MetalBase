<?php
if (!isset($_GET['type']))
	echo "Search by Letter";
else
	echo ucfirst($_GET['type']) . "s by Letter";
?>