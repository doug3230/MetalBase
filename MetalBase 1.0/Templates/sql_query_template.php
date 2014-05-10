<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=metalbase', 'mbuser', 'crazyperson');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = '';
	$pdo->exec($sql);
	$output = 'Database connection established.';
} catch (PDOException $e) {
	$output = 'Error connecting to the database server: ' . 
		$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
	<body>
		<p><?php echo $output; ?></p>
	</body>
</html>