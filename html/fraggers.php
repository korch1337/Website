<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; 
 
 // Cache the results 
    $cache = new Cache('engine/cache/topFraggers'); 
    if ($cache->hasExpired()) { 
        $guilds = mysql_select_multi("SELECT `g`.`id` AS `id`, `g`.`name` AS `name`, COUNT(`g`.`name`) as `frags` FROM `players` p LEFT JOIN `player_deaths` pd ON `pd`.`killed_by` = `p`.`name` LEFT JOIN `guild_membership` gm ON `p`.`id` = `gm`.`player_id` LEFT JOIN `guilds` g ON `gm`.`guild_id` = `g`.`id` WHERE `pd`.`unjustified` = 1 GROUP BY `name` ORDER BY `frags` DESC, `name` ASC LIMIT 0, 10;"); 
         
        $cache->setContent($guilds); 
        $cache->save(); 
    } else { 
        $guilds = $cache->load(); 
    } 
    
    <table id="topfraggerTable" class="table table-striped table-hover">
        <tr class="yellow">
            <th>Name</th>
            <th>Level</th>
            <th>Vocation</th>
        </tr>
            <?php
            foreach ($array as $value) {
            echo '<tr>';
            echo '<td><a href="characterprofile.php?name='. $value['name'] .'">'. $value['name'] .'</a></td>';
            echo '<td>'. $value['level'] .'</td>';
            echo '<td>'. vocation_id_to_name($value['vocation']) .'</td>';
            echo '</tr>';
            }
            ?>
    </table>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
$main_content .= '<div style="text-align: center; font-weight: bold;">Top 30 fraggers on ' . htmlspecialchars($config['server']['serverName']) . '</div>
<table border="0" cellspacing="1" cellpadding="4" width="100%">
    <tr bgcolor="' . $config['site']['vdarkborder'] . '">
        <td class="white" style="text-align: center; font-weight: bold;">Name</td>
        <td class="white" style="text-align: center; font-weight: bold;">Frags</td>
    </tr>';

$i = 0;
foreach($SQL->query('SELECT `killed_by` as `name`, COUNT(`killed_by`) AS `frags` FROM `player_deaths` WHERE `is_player` = 1 GROUP BY `killed_by` ORDER BY COUNT(`killed_by`) DESC LIMIT 0, 30;') as $player)
{
    $i++;
    $main_content .= '<tr bgcolor="' . (is_int($i / 2) ? $config['site']['lightborder'] : $config['site']['darkborder']) . '">
        <td><a href="?subtopic=characters&name=' . urlencode($player['name']) . '">' . htmlspecialchars($player['name']) . '</a></td>
        <td style="text-align: center;">' . $player['frags'] . '</td>
    </tr>';
}

$main_content .= '</table>'; ?>
<?php
include 'layout/overall/footer.php'; ?> 
