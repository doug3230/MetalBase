<table border="1" cols="2">
	<tr><td>Year of Release</td><td><?php echo $song['year']; ?></td></tr>
	<tr><td>Country</td><td><?php echo retrieve_country($song['countryId'])['name']; ?></td></tr>
	<tr><td>Genres</td><td><?php
	$genre_names = retrieve_song_genre_names($song['id']);
	if ($genre_names)
		echo $genre_names[0];
	for ($i = 1; $i < count($genre_names); $i++)
		echo "," . $genre_names[$i];
	?></td></tr>
	<tr><td>Band</td><td><?php echo retrieve_band($song['bandId'])['name'];?></td></tr>
	<tr><td>Album</td><td><?php echo retrieve_album($song['albumId'])['name'];?></td></tr>
	<tr><td>Links</td><td><?php 
	$links = retrieve_song_links($song['id']);
	$row = $links->fetch();
	if ($row) {
		$link_description = $row['description'];
		$link_url = $row['url'];
		echo "<a href='" . $link_url . "'>" . $link_description . "</a>";
	}
		
	while($row = $links->fetch()) {
		$link_description = $row['description'];
		$link_url = $row['url'];
		echo ",<br /><a href='" . $link_url . "'>" . $link_description . "</a>";
	}
	?></td></tr>
</table>

<textarea name="description" id="description" cols="40" rows="10" maxlength="500" disabled="disabled"><?php
echo $song['description'];?></textarea>