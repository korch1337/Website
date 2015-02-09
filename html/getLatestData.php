<script src="davidphp.js"></script>

<?php require 'connect.php';
$result = $db->query("SELECT a.name,b.prize FROM players AS a, bounty_hunters AS b WHERE a.id=b.fp_id ORDER BY b.prize DESC LIMIT 3");

$bounties = array();

for($i = 0; $bounties[$i] = $result->fetch_assoc(); $i++) ;
array_pop($bounties);

$result->free();

$fp = fopen('general.json', 'w');
fwrite($fp, json_encode($bounties));
fclose($fp);
?>

