<?php
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
	echo "<td><a href=$type" . "s.php?id=" . 
		$type_id . ">" . $type_name . "</a></td>";
	$current++;
}
echo "</tr></tbody></table>";
?>