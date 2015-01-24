<?php require_once 'engine/init.php';
if ($config['require_login']['guilds']) protect_page();
$isOtx = ($config['CustomVersion'] == 'OTX') ? true : false;

foreach($SQL->query('SELECT A.* , B.name AS hunted_by, C.name AS player_hunted, D.name AS killed_by
                        FROM bounty_hunters AS A
                        LEFT JOIN players AS B ON A.fp_id = B.id
                        LEFT JOIN players AS C ON A.sp_id = C.id
                        LEFT JOIN players AS D ON A.k_id = D.id 
                        ORDER BY A.killed,A.prize DESC') as $bounty) {
        if($num%2 == 0){$color=$config['site']['darkborder'];}else{$color=$config['site']['lightborder'];}
        if ($bounty['killed_by']){
                $killed_by = '<a href="?subtopic=characters&name='.$bounty['killed_by'].'">'.$bounty['killed_by'].'</a>';
        } else {
                $killed_by = 'still alive';
        }
    $b = round($bounty[prize] / 1000000,2);
    $skill = $SQL->query('SELECT * FROM '.$SQL->tableName('players').' WHERE '.$SQL->fieldName('id').' = '.$bounty['sp_id'].'')->fetch();
if(Player::isPlayerOnline($skill['id']))
                $main_content .= '
                <TR BGCOLOR="'.$color.'">
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['hunted_by'].'">'.$bounty['hunted_by'].'</a></b></center></TD>
                    <TD><center><b>'.$b.'  kk</b></center></TD>
                    <TD><center><b><a href="?subtopic=characters&name='.urlencode($bounty['player_hunted']).'"><b><font color="green">'.htmlspecialchars($bounty['player_hunted']).'</font></b></a></b></center></TD>
            <TD><div style="position: relative; width: 32px; height: 32px;"><div style="background-image: url(\'http://outfit-images.ots.me/outfit.php?id='.$skill['looktype'].'&addons='.$skill['lookaddons'].'&head='.$skill['lookhead'].'&body='.$skill['lookbody'].'&legs='.$skill['looklegs'].'&feet='.$skill['lookfeet'].'\'); position: absolute; width: 64px; height: 80px; background-position: bottom right; background-repeat: no-repeat; right: 0px; bottom: 0px;"></div></div></TD>
                    <TD><center><b>'.$killed_by.'</b></center></TD>
                </TR>';
    else
                        $main_content .= '
                <TR BGCOLOR="'.$color.'">
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['hunted_by'].'">'.$bounty['hunted_by'].'</a></b></center></TD>
                    <TD><center><b>'.$b.'  kk</b></center></TD>
                    <TD><center><b><a href="?subtopic=characters&name='.urlencode($bounty['player_hunted']).'"><b><font color="red">'.htmlspecialchars($bounty['player_hunted']).'</font></b></a></b></center></TD>
            <TD><div style="position: relative; width: 32px; height: 32px;"><div style="background-image: url(\'http://outfit-images.ots.me/outfit.php?id='.$skill['looktype'].'&addons='.$skill['lookaddons'].'&head='.$skill['lookhead'].'&body='.$skill['lookbody'].'&legs='.$skill['looklegs'].'&feet='.$skill['lookfeet'].'\'); position: absolute; width: 64px; height: 80px; background-position: bottom right; background-repeat: no-repeat; right: 0px; bottom: 0px;"></div></div></TD>
                    <TD><center><b>'.$killed_by.'</b></center></TD>
                </TR>';
        $num++;
}
if($num == 0){
        $main_content.='<TR BGCOLOR="'.$color.'"><TD colspan=4><center>Currently there are not any bounty hunter offer.</center></TD></TR>';
}
    $main_content .='</TABLE></table>';
    include 'layout/overall/footer.php';
?> 
