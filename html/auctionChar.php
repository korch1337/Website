<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
<h1>Character auctioning</h1>
<table class="auction_char">
	
	<?php $result = $db->query("SELECT a.name FROM players AS a, znote_auction_player AS b WHERE a.id=b.player_id"); ?>
	
	<tr class="yellow">
		<td>Name</td>
		<td>Level</td>
		<td>Vocation</td>
		<td>Image</td>
		<td>Price/Buy</td>
	</tr>
	<tr>
	      <td><?php while($row = $result->fetch_object()){
			echo $row->name, '<br>';
		} ?></td>
	      
	      <td>100</td>
	</tr>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

