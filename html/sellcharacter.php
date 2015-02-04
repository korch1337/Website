<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['quantity']) {
if (is_int($_POST['quantity']) { $quantity= $_POST['quantity']; }


?>
<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>



<h1>Sell your character :DDD</h1>
<p>Enter your price: <form method='post' action=''>
<input name='quantity' type='text' id='quantity' size='3' maxlength='3' />
<input type='submit'  name='submit' value='submit' />
</form></p>

<?php
echo $quantity;
?>

<?php include 'layout/overall/footer.php'; ?>
