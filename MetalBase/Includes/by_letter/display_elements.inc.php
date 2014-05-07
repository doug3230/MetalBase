<?php
try {
	$type = $_GET['type'];
	$letter = $_GET['letter'];
	if (!$row = $result->fetch())
		echo "<p>There are currently no " . $type . 
			"s with a name starting with &ldquo;". $letter . 
			"&rdquo; in the MetalBase system</p>";
	else {
		$COLS = 8;
		$current = 0;
		
		$type_name = $row['name'];
		$type_id = $row['id'];
		
		echo "<table cols=$COLS border='1'><tbody><tr>";
		echo "<td><a href=$type" . "_profile.php?id=" . 
			$type_id . ">" . $type_name . "</a></td>";
		$current++;
		
		while ($row = $result->fetch()) {
			if ($current % $COLS == 0)
				echo "</tr><tr>";
			
			$type_name = $row['name'];
			$type_id = $row['id'];
			echo "<td><a href=$type" . "_profile.php?id=" . 
				$type_id . ">" . $type_name . "</a></td>";
			$current++;
		}
		echo "</tr></tbody></table>";
	}
} catch (Exception $e) {
	echo '<p>Error displaying ' . $type . 's: ' . $e->getMessage() . '</p>';
	include 'Includes/error.inc.php';
	exit();
}
?>