<p><form action="add_album.php" method="post">
	<label for="name">Album Name:</label>
	<input type="text" name="name" id="name"/>
	<br />
	
	<label for="year">Year of Release:</label>
	<input type="text" name="year" id="year"/>
	<br />
	
	<label for="country">Country of Release:</label>
	<select name="country" id="country">
		<?php 
			while($row = $countries->fetch()) {
				$country_id = $row['id'];
				$country_name = $row['name'];
				echo "<option value='$country_id'>$country_name</option>";
			}
		?>
	</select>
	<br />
	
	<label for="band">Band:</label>
	<select name="band" id="band">
		<?php 
			while($row = $bands->fetch()) {
				$band_id = $row['id'];
				$band_name = $row['name'];
				echo "<option value='$band_id'>$band_name</option>";
			}
		?>
	</select>
	<br />
	
	<label for="description">Description:</label><br />
	<textarea name="description" id="description" cols="40" rows="10" maxlength="500"></textarea>
	<br />
	
	<input type='hidden' name='posted' value='true' />
	<input type="submit" value="Add album to MetalBase" />
</form></p>