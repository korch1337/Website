<?php 

$json = file_get_contents("general.json");
$bounties = json_decode($json, true);

// Adding new data:
$bounties[3] = array('Name' => 'Foo', 'Surname' => 'Bar');

// Writing modified data:
file_put_contents('general.json', json_encode($bounties, JSON_FORCE_OBJECT));
?>
