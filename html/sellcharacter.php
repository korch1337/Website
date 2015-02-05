<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Character</h1>
<ul>
<li>
<?php $getCharacters = $db->query("SELECT name FROM players WHERE account_id=$user_data['id']"); 
$characters = $getCharacters->fetch_object();
?>				
				
				Choose Character:<br>
				
			</li>
			</ul>
		<?php echo $user_data['id']; ?>

<?php include 'layout/overall/footer.php'; ?>
