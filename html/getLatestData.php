<?php 

$json = file_get_contents("general.json");
$bounties = json_decode($json, true);

// Adding new data:
$bounties[3] = array('name' => 'Foo', 'price' => 'Bar');

// Writing modified data:
$fp = fopen('general.json', 'w');
fwrite($fp, json_encode($bounties));
fclose($fp);
?>
