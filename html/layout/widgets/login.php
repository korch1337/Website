  <li><a href="#">LOGIN HERE!</a><!-- Begin 2 Columns Menu Item -->
 <div class="two_column_layout"><!-- Begin 2 columns container -->
 <div class="col_2">
 <h2>Login form: </h2>
 </div>
 <div class="col_1">
 <p>Enter your account number and password to the right!</p> 
 </div>
 <div class="col_1">
 <form action="login.php" method="post">
				&nbsp;<i style="font-size:11px">Account number:</i> <br>
			<input type="text" name="username">
				&nbsp;<i style="font-size:11px">Password:</i> <br>
			<input type="password" name="password">
			<br><br><center><input type="submit" value="Log in"></center>
			<?php
				/* Form file */
				Token::create();
			?>
		</form>
 </div>
 <div class="clear"></div>
 <div class="col_2">
 <p>Vivamus ut urna magna. Aenean vehicula feugiat leo, sit amet facilisis felis commodo a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet erat enim.</p> 
 </div>
 </div><!-- End 2 columns container -->
 </li>
