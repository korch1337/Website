<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
<h1>Character auctioning</h1>
<table class="auction_char">
	
	<?php $names = $db->query("SELECT name FROM players AS a, znote_auction_player AS b WHERE a.id=b.player_id"); ?>
	<?php $levels = $db->query("SELECT level FROM players AS a, znote_auction_player AS b WHERE a.id=b.player_id"); ?>
	
	<tr class="yellow">
		<td>Name</td>
		<td>Level</td>
		<td>Vocation</td>
		<td>Image</td>
		<td>Price/Buy</td>
	</tr>
	<tr>
	      <td><?php while($row = $names->fetch_object()){
			echo $row->name, '<br>'; }
		   $names->free();
		   ?>
	      </td>
	      
	      <td><?php while($row = $levels->fetch_object()){
			echo $row->level, '<br>'; }
		   $levels->free();
		   ?></td>
	</tr>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

