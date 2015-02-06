<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';

$price = $_GET['price'];
$name = $_GET['selected_character'];
 $aucPlayers = $db->query("SELECT a.name, a.id, a.account_id, a.vocation, a.level FROM players AS a WHERE a.name='$name'"); 
   
   $row = $aucPlayers->fetch_object();
   $db->query("INSERT INTO znote_auction_player(`player_id`, `account_id`, `vocation`, `level`, `price`)
   VALUES ($row->id, $row->account_id, $row->vocation, $row->level, $price)");
   $aucPlayers->free();
   
   echo 'YOUR CHARACTER HAS BEEN PUT ON THE MARKET.';

?>

<?php include 'layout/overall/footer.php'; ?>
