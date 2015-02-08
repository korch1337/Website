
<?php require_once 'engine/init.php'; require 'connect.php';
protect_page();
include 'layout/overall/header.php';



// Import from config:
$auction = $config['shop_auction'];

if ($auction['characterAuction']) {
	?>
	
	
<h1>Character auctioning</h1>
<table class="auction_char">
	
	<?php $aucPlayers = $db->query("SELECT a.name,a.id, a.level, a.vocation, b.price FROM players AS a, znote_auction_player as b WHERE a.id=b.player_id ORDER BY a.level DESC"); 
	
	?>
	
	
	<tr class="yellow">
		<td>Name</td>
		<td>Level</td>
		<td>Vocation</td>
		<td>Image</td>
		<td>Price</td>
	</tr>
	
	       <?php while($row = $aucPlayers->fetch_object()){
			echo '<tr>', '<td>', '<a href="characterprofile.php?name='.$row->name.'">' ,$row->name, '</a>', '</td>', '<td>', $row->level, '</td>', '<td>', vocation_id_to_name($row->vocation), '</td>', '<td>','Image?', '</td>', '<td>', '<a href="buypoints.php">' ,$row->price, '</a>', '</td>';
			echo '<td>','<form method="POST" action="'.$_SERVER['PHP_SELF'].'">','<input type="submit" name="'.$row->id.'" value="Buy '.$row->name.'">','</form>','</td>','</tr>';
			
			if(isset($_POST[$row->id])) {
				$db->query("UPDATE players SET account_id=1 WHERE id=$row->id");
		   	}
	       }
		   	
		   
		   $aucPlayers->free();
	       ?>
</table>
	<?php
} else echo "<p>Character shop auctioning system is disabled.</p>";

include 'layout/overall/footer.php'; ?>
