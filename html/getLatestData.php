<div id="latestData">
<?php
$result = mysql_query(your sql here);    
$data = array();
while ($row = mysql_fetch_assoc($result)) {
    // Generate the output in desired format
    $data = array(
        'name' => ....
        'bounty' => ....
    );
}

$json_data = json_encode($data);
file_put_contents('general.json', $json_data);
?>
</div>
