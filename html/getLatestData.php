<?php 

$json = file_get_contents("general.json");
$bounty = json_decode($json, true);

// Adding new data:
$bounty[3] = array('name' => 'Foo', 'price' => 'Bar');

// Writing modified data:
$fp = fopen('general.json', 'w');
fwrite($fp, json_encode($bounty));
fclose($fp);
?>
