<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
<h1>Character auctioning</h1>
<table class="auction_char">
	
	<?php $aucPlayers = $db->query("SELECT a.name, a.level, a.vocation FROM players AS a, znote_auction_player as b WHERE a.id=b.player_id ORDER BY a.level DESC"); 
	
	?>
	
	<tr class="yellow">
		<td>Name</td>
		<td>Level</td>
		<td>Vocation</td>
		<td>Image</td>
		<td>Price/Buy</td>
	</tr>
	<tr>
	      <td><?php while($row = $aucPlayers->fetch_assoc()){
			echo $row->name, '<br>';}
		   $aucPlayers->free();
		   ?>
	      </td>
	      <td><?php while($row = $aucPlayers->fetch_object()){
			echo $row->name, '<br>'; echo $row->level, '<br>';}
		   $aucPlayers->free();
		   ?>
	      </td>
	      
	</tr>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

