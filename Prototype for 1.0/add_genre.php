<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'includes/headcontent.html.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'includes/titlezone.html.php'; ?>
		
		<?php include 'includes/navigationzone.html.php'; ?>
		
		<div id="contentzone">
			<h3>Here is the content zone. Its purpose varies from page to page.</h3>
			<h2>Add Genre</h2>
			<p>Here the user is able to add a new genre to the system.</p>
			<p><form>
				<label for="genrename">Enter the name of the new genre: </label>
				<input type="text" name="genrename" id="genrename" />
				<input type="submit" value="Add" />
			</form></p>
			<p><strong>Important:</strong> Duplicate genres are not allowed. 
				Genre names are stored in lowercase.</p>
			<p><strong>Important:</strong> Display a message when an addition is (un)successful.</p>
			<p><strong>Optional:</strong> Provide a listing of all current genres.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
