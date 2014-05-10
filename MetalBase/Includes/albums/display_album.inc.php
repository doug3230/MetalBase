<table border="1" cols="2">
	<tr><td>Year of Release</td><td><?php echo $album['year']; ?></td></tr>
	<tr><td>Country</td><td><?php echo retrieve_country($album['countryId'])['name']; ?></td></tr>
	<tr><td>Genres</td><td><?php
	$genre_names = retrieve_album_genre_names($album['id']);
	if ($genre_names)
		echo $genre_names[0];
	for ($i = 1; $i < count($genre_names); $i++)
		echo "," . $genre_names[i];
	?></td></tr>
	<tr><td>Band</td><td><?php retrieve_band($album['bandId'])['name'];?></td></tr>
	<tr><td>Songs</td><td><?php
	$songs = retrieve_album_song_names($album['id']);
	$row = $songs->fetch();
	if ($row) {
		$song_id = $row['id'];
		$song_name = $row['name'];
		echo "<a href='songs?id=" . $song_id . "'>$song_name</a>";
	}
		
	while($row = $songs->fetch()) {
		$song_id = $row['id'];
		$song_name = $row['name'];
		echo ",<br /><a href='songs?id=" . $song_id . "'>$song_name</a>";
	}
	?></td></tr>
	<tr><td>Links</td><td><?php 
	$links = retrieve_album_links($album['id']);
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