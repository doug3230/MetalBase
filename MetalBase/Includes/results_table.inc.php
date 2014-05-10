<?php
$COLS = 6;
$current = 0;

$current_name = $row['name'];
$current_id = $row['id'];

echo "<table cols=$COLS border='1'><tbody><tr>";
echo "<td><a href=$type" . "s.php?id=" . 
	$current_id . ">" . $current_name . "</a></td>";
$current++;

while ($row = $result->fetch()) {
	if ($current % $COLS == 0)
		echo "</tr><tr>";
	
	$current_name = $row['name'];
	$current_id = $row['id'];
	echo "<td><a href=$type" . "s.php?id=" . 
		$current_id . ">" . $current_name . "</a></td>";
	$current++;
}
echo "</tr></tbody></table>";
?>