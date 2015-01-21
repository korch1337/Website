<div class="sidebar">
	<h1><font size="5">Login Panel</font></h1>
	<div class="inner">
		<form action="login.php" method="post">
				<li><font size="3">Username: <br></font>
				<li><input type="text" name="username">
			<br>
				<li><font size="3">Password: <br></font>
				<li><input type="password" name="password">
			<br><br>
				<li><input type="submit" value="Submit"><br><br>
			<?php
				/* Form file */
				Token::create();
			?>
		<li><font size="2">Register new account <a href="register.php">here</a>.</font><br>
		<li><font size="2">Lost <a href="recovery.php?mode=username">username</a> or <a href="recovery.php?mode=password">password</a>?</font>
		</form>
	</div>
</div>