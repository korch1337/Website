<div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Character Search</h3>
        <div class="inner">
		<li><font size="3">Character Name:<br></font>
		<form type="submit" action="characterprofile.php" method="get">
			<li><input type="text" name="name" class="search"><br><br>
						<?php
				/* Form file */
				Token::create();
			?>
			<li><input type="submit" value="Search">
		</form>
	</div>
        </div>
