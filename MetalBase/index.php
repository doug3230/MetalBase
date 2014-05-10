<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'Includes/headcontent.inc.php'; ?>
		<title>MetalBase - Your Heavy Metal Database</title>
	</head>
	<body>
		<?php include 'Includes/titlezone.inc.php'; ?>
		
		<?php include 'Includes/navigationzone.inc.php'; ?>
		
		<div id="contentzone">
			<h2>Welcome to MetalBase</h2>
			<hr />
			<p>MetalBase is a project that 
			<a href="http://www.linkedin.com/in/rdouglascanada">Richard Douglas</a> 
			made for himself in order to make learning PHP and MySQL more fun.</p> 
			<p>Documentation for the project (if you don't have access to it already)
			can be found in its <a href="https://github.com/doug3230/MetalBase">Github repository</a>.</p>
			<p>In short, the purpose of MetalBase is to solve a problem that Richard encountered in his everyday
			life. Namely, he likes to listen to music on the internet through websites such as 
			<a href="http://www.youtube.com/">Youtube</a>, <a href="http://grooveshark.com/">Grooveshark</a>,
			<a href="http://bandcamp.com/">Bandcamp</a>, and <a href="http://www.reverbnation.com/">Reverbnation</a> 
			but does not like pirating. Many such sites do respect copyrights and will take down material if the 
			copyright holder wishes it. Thus the goal of MetalBase is to make it easier for Richard to listen his 
			favourite heavy metal bands on the Internet by providing a nice way to navigate to them and by also acting 
			as an area where Richard can store information about his favourite bands, songs, and albums.</p>
			
			<p>To be even more brief, MetalBase is a database for storing information about heavy metal bands, albums, and songs
			including links to relevant pages on the internet. (The software does not care if you use it for other genres such as
			country music and classical so feel free.)</p>
			
			<p>The navigation area hopefully makes using the site pretty straightforward. If you wish to view a listing of 
			all bands, albums, or songs in the database, click the "Bands", "Albums", or "Songs" area itself. Note that for the
			moment, MetalBase allows you to add and edit entries but does not allow you to delete or remove entries.</p>
			
			<p>This is <strong>MetalBase 1.0</strong>. Richard hopes to improve MetalBase at some point by improving the page 
			layout/style and adding more functionality (such as deletion) as well as cleaning up existing functionality 
			(it does seem a bit odd for albums and songs to have an associated country).</p>
		</div> <!-- End of contentzone div -->
		
		<?php include 'Includes/footerzone.inc.php'; ?>
	</body>
</html>
