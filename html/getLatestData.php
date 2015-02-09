<?php require 'connect.php';
$result = $db->query("SELECT a.name,b.prize FROM players AS a, bounty_hunters AS b WHERE a.id=b.fp_id");
$bounties = array();


while($row = $result->fetch_object()){
    
    $bounties = array(
        'name' => $row->name,
        'bounty' => $row->prize
    );
    
}
$result->free();

$fp = fopen('general.json', 'w');
fwrite($fp, json_encode($bounties));
fclose($fp);
?>
