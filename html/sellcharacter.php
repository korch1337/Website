<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
$characters = $getCharacters->fetch_object();
?>

<h1>Sell Character</h1>
<ul>
<li>

Choose Character:<br>
				<select name="selected_character">
				
				<option value="<?php echo '1'; ?>"><?php echo $chars->name ?></option>
				</select>				
				
</li>
</ul>

<?php include 'layout/overall/footer.php'; ?>
