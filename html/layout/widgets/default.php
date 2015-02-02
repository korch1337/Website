     <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Character Search</h3>
		<h2>Character Name: </h2>
		<form type="submit" action="characterprofile.php" method="get">
			<li><input type="text" name="name" class="search"><br><br>
						<?php
				/* Form file */
				Token::create();
			?>
			<li><input type="submit" value="Search">
		</form>

        <h2>Server Status: </h2>
        <div class="m_online" align="center">
					<b>Status:  
						<?php
							$status = true;
							if ($config['status']['status_check']) {
								@$sock = fsockopen ($config['status']['status_ip'], $config['status']['status_port'], $errno, $errstr, 1);
								if(!$sock) {
									echo '<font color="#BA0000"> Offline</font>';
									$status = false;
								}
								else {
									$info = chr(6).chr(0).chr(255).chr(255).'info';
									fwrite($sock, $info);
									$data='';
									while (!feof($sock))$data .= fgets($sock, 1024);
									fclose($sock);
									echo '<font color="#9873DA"> Online</font><br><a href="whoisonline.php">';
									echo user_count_online();
									echo ' players online<br/></a>';
								}
							}
						?></b>
					<br>
				</div>
        
          <h3>Top 5 players</h3>
          <p>1. asdads<br>2. asdsad</p>
        
        
          <h3>Wanted list:</h3>
          <h4>Find and kill these people!</h4>
          <p>1. David<br /><a href="#">List of all</a></p>
        </div>
