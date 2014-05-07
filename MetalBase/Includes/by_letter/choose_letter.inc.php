<p><?php 
$type = $_GET['type'];
for ($letter = 'A'; $letter < 'Z'; $letter++)
	echo "<a href='?type=$type&amp;letter=$letter'>$letter</a>, ";
echo "<a href='?type=$type&amp;letter=Z'>Z</a>";
?></p>