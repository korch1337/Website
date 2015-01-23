<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>
<div class="sidebar">
	<h1><font size="5">Character Search</font></h1>
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
<?php include 'layout/overall/footer.php'; ?>