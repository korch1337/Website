<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
?>

				<h1>Sell Character</h1>
				<ul>
				<li>
				
				Choose Character:<br>
				
				<?php 
				$characters = $getCharacters->fetchObject();
				foreach($characters as $chars){
					echo $chars;
				}
				?>
				
				</li>
				</ul>


<?php include 'layout/overall/footer.php'; ?>
