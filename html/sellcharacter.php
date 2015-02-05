<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; require 'connect.php'; ?>

<h1>Sell Your Character</h1>
<p>Enter char id: </p>
<form type="submit" action="sellchar.php" method="get">
ID: <input type="text" name="id">
<input type="submit" value="Auction">
</form>

<?php include 'layout/overall/footer.php'; ?>
