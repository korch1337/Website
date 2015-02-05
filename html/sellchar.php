<?php require 'connect.php';

$bajs = $_GET['id'];
 $aucPlayers = $db->query("SELECT a.id, a.account_id, a.vocation, a.level FROM players AS a WHERE a.id=$bajs"); 
   while($row = $aucPlayers->fetch_object()){
			echo $row->name, $row->level;
	       }
		   $aucPlayers->free();


?>
