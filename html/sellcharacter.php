<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Your Character</h1>
<p>Enter char id: </p>
<form action="" method="post">
ID: <input type="text" name="id">
<input type="submit">
</form>
<?php

Welcome <?php echo $_POST["id"]; ?><br>

?>
<?php include 'layout/overall/footer.php'; ?>
