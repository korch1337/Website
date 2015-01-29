<?php require_once 'engine/init.php'; include 'layout/overall/header.php';
?>

<h1>Latest Deaths</h1>
<table id="bountyTable" class="table table-striped">
	<tr class="yellow">
		<th>Bounty</th>
		<th>Name</th>
	</tr>
</table>
<?php
} else echo 'No bountys at the moment.';
include 'layout/overall/footer.php'; ?>
