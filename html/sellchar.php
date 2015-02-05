<?php require 'connect.php';

$bajs = $_GET['id'];
 $aucPlayers = $db->query("SELECT a.name, a.id, a.account_id, a.vocation, a.level FROM players AS a WHERE a.id=$bajs"); 
   
   $row = $aucPlayers->fetch_object();
   echo 'DO YOU REALLY WANT TO SELL THIS CHARACTER!??!';
   echo 'Name: ', $row->name,'player id: ', $row->id,'Account ID: ', $row->account_id, 'Vocation: ', $row->vocation, 'Level: ', $row->level;
   $aucPlayers->free();


?>
