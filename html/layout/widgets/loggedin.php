<div class="sidebar">
	<h2>Welcome, <?php echo $user_data['name']; ?>.</h2>
	<div class="inner">
			<?php
			// If admin
			if (is_admin($user_data)) {
			?>
			<li>
				<font size="3"><a href='admin.php'>Admin Page</a></font>
			</li>
			<li>
				<font size="3"><a href='addnews.php'>Admin News</a></font>
			</li>
			<?php
			}
			// end if admin
			?>
			<li>
				<font size="3"><a href='myaccount.php'>My Account</a></font>
			</li>
			<li>
				<font size="3"><a href='createcharacter.php'>Create Character</a></font>
			</li>
			<li>
				<font size="3"><a href='changepassword.php'>Change Password</a></font>
			</li>
			<li>
				<font size="3"><a href='settings.php'>Email Settings</a></font>
			</li>
			<li>
				<font size="3"><a href='logout.php'>Logout</a></font>
			</li>
	</div>
</div>