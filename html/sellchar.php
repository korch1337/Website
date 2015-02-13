<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php require 'connect.php';

$price = $_GET['price'];
$name = $_GET['selected_character'];
 $aucPlayers = $db->query("SELECT a.name, a.id, a.account_id, a.vocation, a.level FROM players AS a WHERE a.name='$name'"); 
   
   $row = $aucPlayers->fetch_object();
   
   try {
    $p = (int)$price;
    
    if($row->level > 149 && $price < 1000){
    
    $db->query("INSERT INTO znote_auction_player(`player_id`, `account_id`, `vocation`, `level`, `price`)
   VALUES ($row->id, $row->account_id, $row->vocation, $row->level, $p)");
   
   $db->query("UPDATE players SET account_id=10 WHERE id=$row->id");
   echo 'Your character has been put on the market.';
    
   }
    
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
   
   $aucPlayers->free();
?>

<?php include 'layout/overall/footer.php'; ?>
