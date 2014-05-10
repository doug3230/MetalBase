<p><form action="edit_album.php?id=<?php echo $album['id'];?>" method="post">
	<label for="name">Album Name:</label>
	<input type="text" name="name" id="name" value="<?php echo $album['name'];?>"/>
	<br />
	
	<label for="year">Year of Release:</label>
	<input type="text" name="year" id="year" value="<?php echo $album['year'];?>"/>
	<br />
	
	<label for="country">Country:</label>
	<select name="country" id="country" >
		<?php 
			$countries = retrieve_countries_alphabetically();
			while($row = $countries->fetch()) {
				$country_id = $row['id'];
				$country_name = $row['name'];
				if ($country_id == $album['countryId'])
					echo "<option value='$country_id' selected='selected'>$country_name</option>";
				else
					echo "<option value='$country_id'>$country_name</option>";
			}
		?>
	</select>
	<br />
	
	<label for="band">Band:</label>
	<select name="band" id="band" >
		<?php 
			$bands = retrieve_bands_alphabetically();
			while($row = $bands->fetch()) {
				$band_id = $row['id'];
				$band_name = $row['name'];
				if ($band_id == $album['bandId'])
					echo "<option value='$band_id' selected='selected'>$band_name</option>";
				else
					echo "<option value='$band_id'>$band_name</option>";
			}
		?>
	</select>
	<br />
	
	<label for="description">Description:</label><br />
	<textarea name="description" id="description" cols="40" rows="10" maxlength="500"><?php
	echo $album['description'];?></textarea>
	<br />
	
	<input type='hidden' name='edit' value='true' />
	<input type="submit" value="Submit changes" />
</form></p>

<p><table border="1" cols="2">
<tr><td>Genres</td><td><?php
	$genre_names = retrieve_album_genre_names($album['id']);
	if ($genre_names)
		echo $genre_names[0];
	for ($i = 1; $i < count($genre_names); $i++)
		echo ",</br>" . $genre_names[$i];
	?></td></tr>
</table></p>
<p><form action="edit_album.php?id=<?php echo $album['id'];?>" method="post">
	<label for="genre">Genre:</label>
	<select name="genre" id="genre">
		<?php 
			$genres = retrieve_genres_alphabetically();
			while($row = $genres->fetch()) {
				$genre_id = $row['id'];
				$genre_name = $row['name'];
				echo "<option value='$genre_id'>$genre_name</option>";
			}
		?>
	</select>
	
	<input type='hidden' name='add_genre' value='true' />
	<input type="submit" value="Add genre" />
</form></p>

<p><table border="1" cols="2">
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
</table></p>
<p><form action="edit_album.php?id=<?php echo $album['id'];?>" method="post">
	<label for="url">Url:</label>
	<input type="text" name="url" id="url" />
	<br />
	
	<label for="year">Description:</label>
	<input type="text" name="urldescription" id="urldescription" />
	<br />
	
	<input type='hidden' name='add_link' value='true' />
	<input type="submit" value="Add link" />
</form></p>