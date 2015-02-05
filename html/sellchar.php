<?php require 'connect.php';

  $aucPlayers = $db->query("SELECT name, id from players WHERE id=$_GET['id']"); 
   while($row = $aucPlayers->fetch_object()){
			echo $row->name;
	       }
		   $aucPlayers->free();

?>
