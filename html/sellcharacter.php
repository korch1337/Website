<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
?>

				<h1>Sell Character</h1>
				
				<form action="" method="post">
				<ul>
				<li>
				
				Choose Character:<br>
				
				<select name="selected_character">
				<?php while($row = $getCharacters->fetch_object()){ ?>
					<option value="<?php echo '1'; ?>"><?php echo $row->name ?></option>
				<?php }
				$getCharacters->free();
				?>
				</select>
				</li>
				</ul>
				<input type="submit" value="Sell Character">
				</form>
				
				<?php
				
				?>

<?php include 'layout/overall/footer.php'; ?>
