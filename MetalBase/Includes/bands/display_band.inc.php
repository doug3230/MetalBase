<table border="1" cols="2">
	<tr><td>Year of Formation</td><td><?php echo $band['year']; ?></td></tr>
	<tr><td>Country</td><td><?php echo retrieve_country($band['countryId'])['name']; ?></td></tr>
	<tr><td>Genres</td><td><?php
	$genre_names = retrieve_band_genre_names($band['id']);
	if ($genre_names)
		echo $genre_names[0];
	for ($i = 1; $i < count($genre_names); $i++)
		echo ",</br>" . $genre_names[$i];
	?></td></tr>
	<tr><td>Albums</td><td><?php
	$albums = retrieve_band_album_names($band['id']);
	$row = $albums->fetch();
	if ($row) {
		$album_id = $row['id'];
		$album_name = $row['name'];
		echo "<a href='albums?id=" . $album_id . "'>$album_name</a>";
	}
		
	while($row = $albums->fetch()) {
		$album_id = $row['id'];
		$album_name = $row['name'];
		echo ",<br /><a href='albums?id=" . $album_id . "'>$album_name</a>";
	}
	?></td></tr>
	<tr><td>Songs</td><td><?php
	$songs = retrieve_band_song_names($band['id']);
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
	$links = retrieve_band_links($band['id']);
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
echo $band['description'];?></textarea>