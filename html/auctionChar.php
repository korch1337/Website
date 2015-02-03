<?php require_once 'engine/init.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
<h1>Character auctioning</h1>
<table class="auction_char">
	<tr class="yellow">
		<td>Name</td>
		<td>Level</td>
		<td>Vocation</td>
		<td>Image</td>
		<td>Price/Buy</td>
	</tr>
	<?php echo '<table border="0" cellspacing="0"><tr class="yellow"><td><center>Player Auctions</center></td></tr> 
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
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

