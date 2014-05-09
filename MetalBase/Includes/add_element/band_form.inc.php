<p><form action="add_band.php" method="post">
	<label for="name">Band Name:</label>
	<input type="text" name="name" id="name"/>
	<br />
	
	<label for="year">Year of Formation:</label>
	<input type="text" name="year" id="year"/>
	<br />
	
	<label for="country">Country:</label>
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
	
	<label for="description">Description:</label><br />
	<textarea name="description" id="description" cols="40" rows="10" maxlength="500"></textarea>
	<br />
	
	<input type='hidden' name='posted' value='true' />
	<input type="submit" value="Add band to MetalBase" />
</form></p>