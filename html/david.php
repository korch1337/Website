<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<?php
$myFile = "general.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_GET["data"];
fwrite($fh, $stringData);
fclose($fh)
?>


<h1>Blank</h1>
<p>This is a blank sample page.</p>

<?php include 'layout/overall/footer.php'; ?>
