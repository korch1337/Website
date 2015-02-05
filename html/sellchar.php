<?php require 'connect.php';

$bajs = $_GET['id'];
 $aucPlayers = $db->query("SELECT name, id from players WHERE id=$bajs"); 
   while($row = $aucPlayers->fetch_object()){
			echo $row->name;
	       }
		   $aucPlayers->free();


?>
