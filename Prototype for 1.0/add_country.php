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
			<h2>Add Country</h2>
			<p>Here the user is able to add a new country to the system.</p>
			<p><form>
				<label for="countryname">Enter the name of the new country: </label>
				<input type="text" name="countryname" id="countryname" />
				<input type="submit" value="Add" />
			</form></p>
			<p><strong>Important:</strong> Duplicate countries are not allowed. 
				Country names are stored in titlecase.</p>
			<p><strong>Important:</strong> Display a message when an addition is (un)successful.</p>
			<p><strong>Optional:</strong> Provide a listing of all current countries.</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'includes/footerzone.html.php'; ?>
	</body>
</html>
