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
	<tr>
		<td><a href="characterprofile.php?name=Tester" target="_BLANK">Tester</a></td>
		<td>105</td>
		<td>Sorcerer</td>
		<td><a href="asd" target="_BLANK">VIEW</a></td>
		<td><button>105 points</button></td>
	</tr>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>

