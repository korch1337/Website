<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<?php $getCharacters = $db->query("SELECT name FROM players WHERE account_id=$user_data['id']"); 
$characters = $getCharacters->fetch_object();
?>

<h1>Sell Character</h1>
<ul>
<li>
				
				Choose Character:<br>
				<select name="selected_character">
				<?php foreach ($characters as $chars) { ?>
				<option value="<?php echo '1'; ?>"><?php echo $chars->name ?></option>
				<?php } ?>
				</select>
			</li>
			</ul>
		<?php echo $user_data['id']; ?>

<?php include 'layout/overall/footer.php'; ?>
