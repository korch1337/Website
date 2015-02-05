<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
?>

				<h1>Sell Character</h1>
				<ul>
				<li>
				
				Choose Character:<br>
				
				<select name="selected_character">
				<?php foreach ($getCharacters->fetch_object() as $chars) { ?>
				<option value="<?php echo '1'; ?>"><?php echo $chars->name ?></option>
				<?php } ?>
				</select>
				
				</li>
				</ul>


<?php include 'layout/overall/footer.php'; ?>
