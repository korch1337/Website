<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
	<?php
	$result = $db->query("SELECT a.name FROM players AS a, znote_auction_player AS b WHERE a.id=b.player_id");
	
	if($result->num_rows){
		$rows = $result->fetch_assoc();
		foreach($rows as $row){
			echo '<p>', $row['name'], '<br>', '</p>';
		}
		
	}
	
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
	
	<tr class="yellow">
	    <td>Test</td>
	</tr>
	
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

