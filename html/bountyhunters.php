<?php include 'layout/overall/header.php';

echo "<h2>Server rates</h2>
		<table class='table table-striped table-hover'>
		<tbody><tr class='yellow'><td>Experience rate</td><td>Skills rate</td><td>Magic rate</td><td>Loot rate</td></tr>
		<tr><td><center>x".$lua_path['rateExp']."</center></td><td><center>x".$lua_path['rateSkill']."</center></td><td><center>x".$lua_path['rateMagic']."</center></td><td><center>x".$lua_path['rateLoot']."</center></td></tr>
		</tbody></table>";
		
		


include 'layout/overall/footer.php'; ?>

