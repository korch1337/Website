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
$aucPlayer = mysql_select_multi('SELECT `name`, `id`, `id` FROM `players` AS a, znote_auction_player AS b WHERE `a.id`=`b.id`');
echo '<a href="characterprofile.php?name='.$aucPlayer['a.name'].'">'.$aucPlayer['a.name'].'</a></td></tr>';
echo '</table>'; ?>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

