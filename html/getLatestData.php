<div id="latestData">
<?php 

$bounties[3] = array('Name' => 'Foo', 'Surname' => 'Bar');

$json_data = json_encode($bounties);
file_put_contents('general.json', $json_data);
?>
</div>
