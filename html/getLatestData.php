<div id="latestData">
<?php require 'connect.php';
$result = $db->query("SELECT a.name,b.prize FROM players AS a, bounty_hunters AS b WHERE a.id=b.fp_id");
$data = array();


while($row = $result->fetch_object()){
    
    $data = array(
        'name' => $row->name;
        'bounty' => $row->prize;
    );
    
}
$result->free();

$json_data = json_encode($data);
file_put_contents('general.json', $json_data);
?>
</div>
