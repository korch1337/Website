<?php require 'connect.php';

// $json = file_get_contents("general.json");
// $bounties = json_decode($json, true);

$result = $db->query("SELECT a.name,b.prize FROM players AS a, bounty_hunters AS b WHERE a.id=b.fp_id");

$bounties = array();

while($row = $result->fetch_assoc()){
    
     $bounties[] = $row;
    
}
$result->free();

$fp = fopen('general.json', 'w');
fwrite($fp, json_encode($bounties));
fclose($fp);
?>
