<div id="latestData">
<?php
$data = array(
    [0] => 1
    [1] => 2
    [2] => 3
    );


$json_data = json_encode($data);
file_put_contents('general.json', $json_data);
?>
</div>
