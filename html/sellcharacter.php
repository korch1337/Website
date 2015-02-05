<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Character</h1>
<ul>
<li>
<?php $getCharacters = $db->query("SELECT name FROM players WHERE account_id=$user_data['id']"); 
$characters = $getCharacters->fetch_object();
echo $characters->name;
?>				
				
				
			</li>
			</ul>

<?php include 'layout/overall/footer.php'; ?>
