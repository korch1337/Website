<?php
require_once 'engine/init.php';
include 'layout/overall/header.php';
?>
<h2>Top Fraggers</h2>
<?php 
 

$i = 0; 
$ee = mysql_query("SELECT `p`.`name` AS `name`, COUNT(`p`.`name`) as `frags` 
 FROM `killers` k 
 LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id` 
 LEFT JOIN `players` p ON `pk`.`player_id` = `p`.`id` 
WHERE `k`.`unjustified` = 1 AND `k`.`final_hit` = 1 
 GROUP BY `name` 
 ORDER BY `frags` DESC, `name` ASC 
 LIMIT 0,30;")or die(mysql_error());
 echo '<table><tr class="yellow"><td>Name</td><td>Frags</td></tr>';
while($e = mysql_fetch_assoc($ee)) 

{ 
 $i++; 
 echo 
 
 '<tr><td>'.$e['name'] .'</td> <td> '.$e['frags'].'</tr><br>'; 
} 
echo '</table>'; 
?>
<?php

include 'layout/overall/footer.php';
?>