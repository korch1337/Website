<div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Server Information</h3>
        <?php echo '<table border="0" cellspacing="0"><tr class="yellow"><td><center>Server Information</center></td></tr> 
<tr><td>'; 
$newPlayer = mysql_select_single('SELECT `id`, `name` FROM `players` ORDER BY `id` DESC LIMIT 1');
$players = mysql_select_single("SELECT COUNT(*) as `shit` FROM `players` "); 
$bestPlayer = mysql_select_single("SELECT `name`, `level` FROM `players` ORDER BY `level` DESC LIMIT 1");
$accs = mysql_select_single("SELECT COUNT(*) as `shiter` FROM `accounts` "); 
$guilds = mysql_select_single("SELECT COUNT(*) as `yea` FROM `guilds` "); 
echo '<center>Welcome to our newest player: <a href="characterprofile.php?name='.$newPlayer['name'].'">'.$newPlayer['name'].'</a></center></td></tr>'; 
echo '<tr><td><center>The best player is: <a href="characterprofile.php?name='.$bestPlayer['name'].'">'.$bestPlayer['name'].'</a> level: '.$bestPlayer['level'].' congratulations!</center></td></tr>'; 
echo '<tr><td><center>We have <b>'.$accs['shiter'].'</b> accounts in our database, <b>'.$players['shit'].'</b> players, and <b>'.$guilds['yea'].' </b>guilds </center></td></tr>'; 
echo '</table>'; ?>
		<br>
          <br>
          <h3>Top 5 worst players</h3>
          <p>1. asdads<br>2. asdsad</p>
        
         <br>
          <h3>Most Powerful Guilds:</h3>
        </div>
