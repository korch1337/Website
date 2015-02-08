<div id="latestData">
<?php
$data = array(
    "foo" => "bar",
    "bar" => "foo"
    );


$json_data = json_encode($data);
file_put_contents('general.json', $json_data);
?>
</div>
