<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';

$bajs = $_GET['id'];
 $aucPlayers = $db->query("SELECT a.name, a.id, a.account_id, a.vocation, a.level FROM players AS a WHERE a.id=$bajs"); 
   
   $row = $aucPlayers->fetch_object();
   echo 'Name: ', $row->name,'player id: ', $row->id,'Account ID: ', $row->account_id, 'Vocation: ', $row->vocation, 'Level: ', $row->level;
   $db->query("$link,"INSERT INTO znote_auction_player(`player_id`, `account_id`, `vocation`, `level`)
   VALUES ($row->id, $row->account_id, $row->vocation, $row->level)");
   $aucPlayers->free();


?>

<?php include 'layout/overall/footer.php'; ?>
