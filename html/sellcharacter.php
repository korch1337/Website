<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
?>

				<h1>Sell Character</h1>
				
				<form action="sellchar.php" method="get">
				<ul>
				<li>
				
				Choose Character:<br>
				
				<select name="selected_character">
				<?php while($row = $getCharacters->fetch_object()){ ?>
					<option value="<?php echo $row->name; ?>"><?php echo $row->name ?></option>
				<?php }
				$getCharacters->free();
				?>
				</select>
				</li>
				</ul>
				<input type="text" name="price" placeholder="Enter your price here">
				<input type="submit" value="Sell Character">
				</form>
				<p>Your character needs to be level 150 or above<br>Maximum price allowed:1000 bonus points.</p>
<?php include 'layout/overall/footer.php'; ?>
