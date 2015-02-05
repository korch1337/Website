<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';
$accid = $user_data['id'];

$getCharacters = $db->query("SELECT name FROM players WHERE account_id=$accid"); 
$characters = $getCharacters->fetch_object();
echo '<h1>'.'Sell Character'.'</h1>';
echo '<ul>'.'<li>';
echo 'Choose Character:<br>';
echo '<select name="selected_character">';
foreach ($characters as $chars) {
echo '<option value="'.'1'.'">';
echo $chars->name.'</option>'; }
echo '</select>';
echo '</li>'.'</ul>';
?>

<?php include 'layout/overall/footer.php'; ?>
