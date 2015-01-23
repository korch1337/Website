<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Who is online?</h1>
$array = online_list();
if ($array) {
    ?>
   
    <table id="onlinelistTable">
        <tr class="yellow">
            <td>Name:</td>
            <td>Level:</td>
            <td>Vocation:</td>
        </tr>
            <?php
            foreach ($array as $value) {
            $playerID = mysql_select_single("SELECT `id` FROM `players` WHERE `name` = '". $value[0] ."';");
            $vocation = mysql_select_single("SELECT `value` FROM `player_storage` WHERE (`key` = 86228 AND `player_id` = '". $playerID['id'] ."');");
           
            if ($vocation['value'] == -1) { $vocationName = "Trainer"; }
            elseif ($vocation['value'] == 3) { $vocationName = "Firetamer"; }
            elseif ($vocation['value'] == 4) { $vocationName = "Waterdragon"; }
            else { $vocationName = "Unknown Vocation"; }
       
            echo '<tr>';
            echo '<td><a href="characterprofile.php?name='. $value[0] .'">'. $value[0] .'</a></td>';
            echo '<td>'. $value[1] .'</td>';
            echo '<td>'. $vocationName .'</td>';
            echo '</tr>';
            }
    </table>
