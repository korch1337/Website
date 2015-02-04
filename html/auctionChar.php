<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php'; 

// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
	<?php
	<h1>Auctions:</h1>
	$result = $db->query("SELECT name FROM players WHERE id=1");
	
	if($result->num_rows){
		$rows = $result->fetch_assoc();
		
		echo '<p>', $rows['name'], '</p>';
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

